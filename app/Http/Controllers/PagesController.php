<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;

class PagesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success', 'User Logout Successfully');
    }
}
