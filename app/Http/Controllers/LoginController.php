<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    } 

    
    public function func()
    {
        return view('demo');
    } 


    
    public function home()
    {
        return view('homepage');
    } 
}
