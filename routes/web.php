<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Models\User;

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
    // return view('welcome');
    return redirect('about');
});

Route::get('/about', function () {
    return view('about');
});

Route::view('contact', 'contact');

Route::get('users/{user}', [Users::class, 'index']);

Route::get('sie', [Users::class, 'sie']);
