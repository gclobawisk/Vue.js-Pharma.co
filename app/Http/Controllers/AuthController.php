<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function auth(Request $request){


        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            if(Auth::user()->admin == 1){
                return redirect('/dashboard');
            }else{
                return redirect('/login');

            }
          
        }else{
                return redirect('/login');
            }
        }   



}
