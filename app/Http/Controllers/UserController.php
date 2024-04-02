<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerUserController;
use Illuminate\Support\Str;

class UserController extends VoyagerUserController
{

    public function store(Request $request)
    {
        $request = $request->merge(['api_token' => Str::random(60), 'status' => 'active' ]);
        return parent::store($request);
    }
}
