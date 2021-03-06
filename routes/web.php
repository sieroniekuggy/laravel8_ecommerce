<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/product', [ProductController::class, 'productList']);
Route::view('/about', 'about');

Route::controller(MemberController::class)->group(function(){
    Route::get('list', 'list');
    Route::get('delete/{id}','delete');
    Route::get('edit/{id}','showData');
    Route::post('edit','update');
    Route::get('db','dbOperations');
    Route::view('add', 'addmember');
    Route::post('add','addData');
});

