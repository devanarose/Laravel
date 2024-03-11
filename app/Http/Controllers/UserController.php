<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(Request $request){ // we will add validation
        $IncomingFields = $request -> validate([
            'username' => ['required', 'min:4','max:20'],
            'email' => 'required',
            'password'=> ['required', 'confirmed']
        ]);
        User::create($IncomingFields);
        return view('homepage');
    }

    function login(Request $request) { 
        $IncomingFields = $request -> validate([
            'username' => ['required'],
            'password'=> ['required']
        ]);
        if (auth()->attempt(['name' => $IncomingFields['name'] , 'password' => $IncomingFields['password']]));
        }
        
    }



