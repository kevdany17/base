<?php

namespace App\Services\Customer;

use App\Enums\RoleType;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateService
{
	public function run($request, $id): void
	{
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
	}
}
