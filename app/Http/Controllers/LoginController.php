<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    
    public function logoutt()
    {
        return view('login');
    } 


function loginPost(Request $request){
         $request->validate([
            'email'=>'required',
            'password'=>'required'
         ]);

         $credentials=$request->only('email','password');
         if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
            return redirect(route('login.post'))->with('error','error occours');
         }
}


function registration(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:user',
        'number'=>'required',
        'password'=>'required',
        'rpassword'=>'required',
     ]);

     $data['name']=$request->name;
     $data['email']=$request->email;
     $data['number']=$request->number;
     $data['password']=hash::make($request->password);
     $data['rpassword']=$request->rpassword;
     $user = User::create($data);
     if(!$user){
          return redirect(route('register'))->with('error',"login details not valid");
     }


     return redirect(route('login'))->with('error',"login Successfull");

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));


    }
   

}
}

