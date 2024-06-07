<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Category;


class LoginController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function home()
    {
        return view('auth.homepage');
    }

    public function index()
    {
        $categories = category::get();
        return view('auth.hello', compact('categories'));
    }



    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        return view('auth.edit', compact('category'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
                'Date' => 'required|date',
                'Name' => 'required|max:225',
                'Purpose' => 'required|max:225',
                'Amount' => 'required|numeric',
                'Reciept' => 'nullable|string'
   ]);

        Category::FindOrFail($id)->update([
                'Date' => $request->Date,
                'Name' => $request->Name,
                'Purpose' => $request->purpose,
                'Amount' =>$request->Amount,
                'reciept' => $request->Reciept,
            ]);

        return redirect()->back()->with('status', "CategoryUpdated");
    }
    public function delete(int $id)
    {
        $Category = Category::FindOrFail($id);
        $Category->delete();
        return redirect()->back()->with('status', "Category Deleted");
    }

    public function create()
    {
        return view('auth.create');
    }





    public function store(Request $request)
    {
        $request->validate([
            'Date'    => 'required|date',
            'Name'    => 'required|max:225',
            'Purpose' => 'required|max:225',
            'Amount'  => 'required|numeric',
            'Reciept' => 'nullable|string',
        ]);

        Category::create([
            'Date'     => $request->Date,
            'Name'     => $request->Name,
            'Purpose'  => $request->Purpose,
            'Amount'   => $request->Amount,
            'reciept'  => $request->Reciept,
        ]);

        return redirect('layouts/create')->with('status', "created")->with('status', 'Category successfully created');
    }


    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard'));
        } else {
            return redirect(route('auth.login'))->with('error', 'Invalid credentials');
        }
    }

    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        // Prepare the data array
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        // Create the user
        $save = $user->save();

        // Check if user creation was successful
        if (!$save) {
            return redirect(route('auth.login'))->with('error', "Registration failed. Please try again.");
        }

        return redirect(route('auth.login'))->with('status', "Registration successful. Please log in.");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('auth.login'));
    }
}
