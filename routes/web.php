<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
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

// Route::get('about', function(){
//     return view('about');
// });

// Route::group(['middleware'=>['protectedPage']], function(){
//     Route::post('users',[UsersController::class, 'getData']);
//     Route::view('login', 'users');
// });

Route::get('users', [UsersController::class, 'getData']);
Route::get('posts', [PostController::class, 'getAllPosts']);
Route::view('home','home')->middleware('protectedPage');
Route::view('noaccess', 'noaccess');
