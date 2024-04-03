<?php
namespace App\Services\Customer;

use App\Enums\RoleType;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreService {
	public function run($request) :void {
		$user = new User();
		$user->name = $request->first_name . ' ' . $request->last_name;
		$user->email = $request->user;
		$user->password = Hash::make($request->password);
		$user->role_id = RoleType::CUSTOMER; //customer
		$user->avatar = 'users/default.png';
		$user->save();

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
	}
}
