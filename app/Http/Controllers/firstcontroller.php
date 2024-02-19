<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
    function homepage(){
        return view('homepage');
    }
    function about(){
        return '<h1>about<?h1><br><a href="/">HOME</a><br>';
    }
    function contact(){
        return 'contact page<br><a href="/about">ABOUT</a>';

    }
}
