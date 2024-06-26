<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Category;
use App\Models\ExpenseType;
use App\Models\pcategory;
use App\Models\ProductCat;

class LoginController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }
    public function createcat()
    {
        $productCats = ProductCat::all(); // Ensure you are fetching all product categories
        return view('auth.createcat', compact('productCats'));
    }

    public function oneapp()
    {
        // Fetch data from ProductCat model
        $product_cats = ProductCat::all(); // Adjust query as per your needs

        // Pass data to view
        return view('auth.haii', [
            'product_cats' => $product_cats,
        ]);
    }

    public function twoapp()
    {
        $pcategories = pcategory::all();
        return view('auth.hey', compact('pcategories'));
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

    public function bat()
    {
        $productCategories = pcategory::all(); // Fetch all product categories or adjust query as needed 
        return view('auth.createcat', compact('productCategories'));
    }



    public function edit(int $id)
    {
        $expenseTypes = ExpenseType::all();
        $category = Category::findOrFail($id);
        return view('auth.edit', compact(['category', 'expenseTypes']));
    }

    public function edyt(int $id)
    {
        $productCategories = pcategory::all();
        $catgry = ProductCat::findOrFail($id);
        return view('auth.createedit', compact(['catgry', 'productCategories']));
    }


    public function deleted(int $id)
    {
        $categories = pcategory::FindOrFail($id);
        $categories->delete();
        return redirect()->back()->with('status', "Category Deleted");
    }




    public function updated(Request $request, $id)
    {
        $request->validate([
            'Category_Name' => 'required|max:225',
            'Category_Description' => 'required|max:225',
        ]);

        $category = pcategory::findOrFail($id);
        $category->update([
            'Category_Name' => $request->Category_Name,
            'Category_Description' => $request->Category_Description,
        ]);

        return redirect()->back()->with('status', 'Category Updated');
    }


    public function update(Request $request, int $id)
    {
        $request->validate([
            'Date' => 'required|date',
            'Name' => 'required|max:225',
            'ExpenseType' => 'required',
            'Purpose' => 'required|max:225',
            'Amount' => 'required|numeric',
            'Reciept' => 'nullable|string'
        ]);

        Category::FindOrFail($id)->update([
            'Date' => $request->Date,
            'Name' => $request->Name,
            'ExpenseType' => $request->ExpenseType,
            'Purpose' => $request->Purpose,
            'Amount' => $request->Amount,
            'Reciept' => $request->Reciept,
        ]);

        return redirect()->back()->with('status', "CategoryUpdated");
    }

    public function updat(Request $request, int $id)
    {
        $request->validate([
            'Product_Category' => 'required',
            'Product_Name' => 'required|max:255',
            'Price' => 'required|numeric',
            'Offer' => 'required|max:255',
            'Product_Description' => 'required|max:255',
        ]);

        // Create a new ProductCat instance and store it in the database
        ProductCat::FindOrFail($id)->update([
            'Product_Category' => $request->Product_Category,
            'Product_Name' => $request->Product_Name,
            'Price' => $request->Price,
            'Offer' => $request->Offer,
            'Product_Description' => $request->Product_Description,
        ]);

        return redirect()->back()->with('status', "CategoryUpdated");
    }


    public function store(Request $request)
    {

        $request->validate([
            'Date'    => 'required|date',
            'Name'    => 'required|max:225',
            'ExpenseType' => 'required',
            'Purpose' => 'required|max:225',
            'Amount'  => 'required|numeric',
            'Reciept' => 'nullable|string',
        ]);

        Category::create([
            'Date'     => $request->Date,
            'Name'     => $request->Name,
            'ExpenseType' => $request->ExpenseType,
            'Purpose'  => $request->Purpose,
            'Amount'   => $request->Amount,
            'Reciept'  => $request->Reciept,
        ]);

        return redirect('layouts/create')->with('status', "created")->with('status', 'Category successfully created');
    }




    public function edited(int $id)
    {
        $categories = pcategory::findOrFail($id);
        return view('auth.edited', compact(['categories']));
    }


    public function delete(int $id)
    {
        $Category = Category::FindOrFail($id);
        $Category->delete();
        return redirect()->back()->with('status', "Category Deleted");
    }

    public function delet(int $id)
    {
        $catgry = ProductCat::FindOrFail($id);
        $catgry->delete();
        return redirect()->back()->with('status', "Category Deleted");
    }





    public function create()
    {
        $expenseTypes = ExpenseType::all();
        return view('auth.create', compact(['expenseTypes']));
    }

    public function createtwo()
    {
        return view('auth.createtwo');
    }

    public function story(Request $request)
    {

        $request->validate([
            'Category_Name'    => 'required|max:225',
            'Category_Description' => 'required|max:225',
        ]);

        pcategory::create([
            'Category_Name'     => $request->Category_Name,
            'Category_Description'  => $request->Category_Description,
        ]);

        return redirect('layouts/createtwo')->with('status', "created")->with('status', 'Category successfully created');
    }

    public function storecat(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Product_Category' => 'required',
            'Product_Name' => 'required|max:255',
            'Price' => 'required|numeric',
            'Offer' => 'required|max:255',
            'Product_Description' => 'required|max:255',
        ]);

        // Create a new ProductCat instance and store it in the database
        ProductCat::create([
            'Product_Category' => $request->Product_Category,
            'Product_Name' => $request->input('Product_Name'),
            'Price' => $request->input('Price'),
            'Offer' => $request->input('Offer'),
            'Product_Description' => $request->input('Product_Description'),
        ]);

        // Redirect back to the create page with a success message
        return redirect('layouts/createcat')->with('status', 'Category successfully created');
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

    public function addDrop(Request $request)
    {

        $request->validate([
            'exptype' => 'required|string|max:255',
        ]);

        $expenseType = new ExpenseType();
        $expenseType->name = $request->exptype;
        $expenseType->save();

        return response()->json(['success' => true, 'expenseType' => $expenseType->name]);
    }

    public function treat()
    {
        $productone = pcategory::all(); // Fetch all product categories
        return view('auth.createcat', compact('productone'));
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('auth.login'));
    }
}
