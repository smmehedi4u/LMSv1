<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index()
    {
         if (Auth::user()->user_role == 0) {
              return redirect('/');
         } elseif (Auth::user()->user_role == 1) {
              return redirect('/admin');
         }
    }
    public function adminHome(){
        return view("home");
    }
}
