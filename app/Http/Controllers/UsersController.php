<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getData(Request $req){
        $req->validate([
            'username'=>'required | min:5',
            'password'=>'required | max:8'
        ]);
        return $req->input();
    }
}
