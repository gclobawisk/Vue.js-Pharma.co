<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{
    public function index(){

        if (Auth::check()) {
            return redirect('/dashboard');
        }
    
        return view('register');

    }

    public function store(Request $request){


         //Validacao do dados//
         $validator = Validator::make($request->all(), 
         ['name' => 'required', 'username' => 'required|unique:users', 'email' => 'required|unique:users', 'confirmEmail' => 'required',  'password' => 'required',], 
         ['name.required' => 'Nome é OBRIGATÓRIO', 'username.required' => 'Usuário é OBRIGATÓRIO', 'email.required' => 'Email é OBRIGATÓRIO',
         'confirmEmail.required' => 'Confirme seu Email', 'password.required' => 'Senha é OBRIGATÓRIA', 'username.unique' => 'Este Usuário Já existe','email.unique' => 'Este Email Já existe'],             
         );
 
            if ($validator->fails()) {
                return response()->json(
                    ["errors" => $validator->errors()], 422);
            }
        
            else{

                //Verificando se o e-mail e confirmação de e-mails são iguais
                if ($request->email == $request->confirmEmail){
    
                    $user = new User;

                    $user->name = $request->name;
                    $user->username = $request->username;
                    $user->email = $request->email;
                    $user->password = Hash::make($request->password);
    
                    $user->save();

                    return response()->json(
                        ["sucesso" => 'Cadastro Efetuado com Sucesso']);
    
    
                }

            }      

    }

}
