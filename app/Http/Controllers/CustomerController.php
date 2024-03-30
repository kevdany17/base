<?php

namespace App\Http\Controllers;

use App\Libraries\Notifications\Mail;
use App\Models\Customer;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Impulzo\RestClientService\Libraries\Facade\RestClientFacade;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Setting;
use App\Enums\RoleType;

class CustomerController extends VoyagerBaseController
{
    public function store(Request $request)
    {
        $response = array('status' => 200);
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->user;
            $user->password = Hash::make($request->password);
            $user->role_id = RoleType::CUSTOMER; //customer
            $user->avatar = 'users/default.png';
            $user->save();

            $customer = new Customer();
            $customer->first_name = $request->first_name;
            $customer->last_name = $request->last_name;
            $customer->full_name = $request->first_name . ' ' . $request->last_name;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->phone = $request->phone;
            $customer->rfc = $request->rfc;
            $customer->reason = $request->reason;
            $customer->postal_code = $request->postal_code;
            $customer->email = $request->email;
            $customer->user_id = $user->id;
            $customer->save();

            DB::commit();
            $response['data'] = $customer;
            $company = Setting::find(1);
            $data = [
                'name' => $customer->full_name,
                'company' => $company->value,
                'user' => $user->email,
                'password' => $request->password
            ];
            $mail = new Mail(new RestClientFacade);
            $mail->send([$user->email], 'CREDENCIALES DE ACCESO', view('mail.credentials', $data)->render());
        } catch (Exception $ex) {
            DB::rollBack();
            $response['status'] = 500;
            $response['message'] = 'Ocurrió el siguiente error: ' . $ex->getMessage();
        } finally {
            return $response;
        }
    }

    public function update(Request $request, $id)
    {
        $response = array('status' => 200);
        DB::beginTransaction();
        try {
            $user = User::find($request->user_id);
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->user;
            if (isset($request->password) && strlen($request->password) > 0) {
                $user->password = Hash::make($request->password);
            }
            $user->update();

            $customer = Customer::find($id);
            $customer->first_name = $request->first_name;
            $customer->last_name = $request->last_name;
            $customer->full_name = $request->first_name . ' ' . $request->last_name;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->phone = $request->phone;
            $customer->rfc = $request->rfc;
            $customer->reason = $request->reason;
            $customer->postal_code = $request->postal_code;
            $customer->email = $request->email;
            $customer->update();

            DB::commit();
            $response['data'] = $customer;
        } catch (Exception $ex) {
            DB::rollBack();
            $response['status'] = 500;
            $response['message'] = 'Ocurrió el siguiente error: ' . $ex->getMessage();
        } finally {
            return $response;
        }
    }
}
