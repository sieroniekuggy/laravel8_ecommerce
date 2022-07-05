<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class UserAuth extends Controller
{
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user',$data);
        echo session('user');
    }
}
