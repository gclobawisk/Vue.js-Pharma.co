<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;


class UsersController extends Controller
{

    public function getUsers(){

        $result = User::select('users.*')
        ->get();

        return response()->json(
            ["users" => $result->all()]);

    }
}
