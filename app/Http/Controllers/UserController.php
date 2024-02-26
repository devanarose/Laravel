<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(Request $request){ // we will add validation
        $IncomingFields = $request -> validate([
            'username' => 'required',
            'email' => 'required',
            'password'=> 'required'
        ]);
        User::create($IncomingFields);
    }
}
