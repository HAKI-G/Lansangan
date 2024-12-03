<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() {
        // Retrieve all products to pass to the view
        $data = Product::all();

        // If the user is authenticated, load the appropriate cart view based on user type
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            // Redirect authenticated users to the cart view based on their user type
            if ($usertype == '0') {
                return view('user.cart', compact('data'));  // For users, show user cart view
            } else {
                return view('admin.cart', compact('data')); // For admins, show admin cart view
            }
        } else {
            // For unauthenticated users, show the cart view
            $data = product::paginate(4);
            return view('user.cart', compact('data'));
        }
    }
}
