<?php

namespace App\Services\Customer;

use App\Models\Customer;
use App\Models\User;
use App\Enums\ErrorLog;
use App\Exceptions\ServiceException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Exception;

class UpdateService
{
	public function run($request, $id): void
	{
		DB::beginTransaction();
		try {
			$user = User::find($request->user_id);
			$user->update([
				'name' => $request->first_name . ' ' . $request->last_name,
				'email' => $request->user,
				'password' => isset($request->password) && strlen($request->password) > 0 ? Hash::make($request->password) : $user->password,
			]);

			$customer = Customer::find($id);
			$customer->update([
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
