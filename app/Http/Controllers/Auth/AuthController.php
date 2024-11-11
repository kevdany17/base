<?php

namespace App\Http\Controllers\Auth;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerAuthController;
use Illuminate\Http\Request;
use App\Enums\UserStatus;

class AuthController extends VoyagerAuthController
{

	public function postLogin(Request $request){
		return parent::postLogin($request);
	}

    protected function authenticated(Request $request, $user)
    {
        if ($user->status != UserStatus::ACTIVE) {
            $this->guard()->logout();
            return Voyager::view('voyager::login')->with('error', 'Tu cuenta no está activa. Por favor, contacta al administrador.');
        }
    }

}
