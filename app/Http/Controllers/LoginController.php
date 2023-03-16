<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function index(){

        if (Auth::check()) {
            return redirect('/dashboard');
        }     
    
        return view('login');

    }

    public function logout(){
        Auth::logout();
 
        session()->invalidate();
     
        session()->regenerateToken();
     
        return redirect('/login');
    }
}
