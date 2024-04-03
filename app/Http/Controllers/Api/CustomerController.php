<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function validateUser($email)
    {
        $user = User::where('email','=',$email)->first();
        return response()->json([
            'data' => isset($user),
            'status' => 200
        ]);
    }
}
