<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register()
    {
        return view('register');
    } 

    
    public function login()
    {
        return view('login');
    } 


    
    public function homepage()
    {
        return view('homepage');
    } 

    
    public function logout()
    {
        return view('login');
    } 
}
