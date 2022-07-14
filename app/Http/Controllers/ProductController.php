<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ProductController extends Controller
{
    //
    function productList()
    {
       $totalProduct = 20;
       return Blade::render('<h2>{{$total}} Product List</h2>', ['total'=>$totalProduct]);
    }
}
