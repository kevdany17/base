<?php

namespace App\Services\Customer;

use App\Enums\RoleType;
use App\Models\Customer;
use App\Models\User;
use App\Enums\ErrorLog;
use App\Exceptions\ServiceException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Exception;

class StoreService
{
	public function run($request): void
	{
		DB::beginTransaction();
		try {
			$user = User::create([
				"name" => $request->first_name . ' ' . $request->last_name,
				"email" => $request->user,
				"password" => Hash::make($request->password),
				"role_id" => RoleType::CUSTOMER, //customer
				"avatar" => 'users/default.png'
			]);

			Customer::create([
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'full_name' => $request->first_name . ' ' . $request->last_name,
				'gender' => $request->gender,
				'address' => $request->address,
				'phone' => $request->phone,
				'rfc' => $request->rfc,
				'reason' => $request->reason,
				'postal_code' => $request->postal_code,
				'email' => $request->email,
				'user_id' => $user->id,
			]);

			DB::commit();
		} catch (QueryException $ex) {
			DB::rollBack();
			throw new ServiceException("Ocurrió un error en la consulta: {$ex->getMessage()}", ErrorLog::SQL);
		} catch (Exception $ex) {
			DB::rollBack();
			throw new ServiceException("Ocurrió un error interno: {$ex->getMessage()}", ErrorLog::ERROR);
		}
	}
}
