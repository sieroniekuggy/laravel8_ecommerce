<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user){
        echo $user;
        echo "hello from users controller";
    }

    public function sie(){
        echo "hello sie";
    }
}
