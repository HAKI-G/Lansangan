<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect() {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');  // View for admin
        } else {
            return view('user.home');   // View for regular users
        }
    }

    public function index() {

        if(Auth::id()) {
            return redirect('redirect');
        }

        else {
            return view ('user.home');
        }

    }
}