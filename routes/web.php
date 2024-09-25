<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShoeController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register', 'register');
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ShoeController::class, 'index']);
Route::get("/detail/{id}", [ShoeController::class, 'detail']);
Route::post("addCart", [ShoeController::class, 'addCart']);
Route::get("listCart", [ShoeController::class, 'listCart']);
Route::get("removecart/{id}", [ShoeController::class, 'removeCart']);