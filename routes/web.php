<?php

use Illuminate\Support\Facades\Route;

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
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CYW(S)
//Route::get('/home', function (){
//    return view('home');
//}) -> middleware(['auth', 'verified']) -> name('home');

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'showProfile']) -> name('profile');

Route::get('/testing', [\App\Http\Controllers\ProfileController::class, 'testing']) -> name('testing');

Route::get('/editProfile', [\App\Http\Controllers\ProfileController::class, 'showEditProfile']) -> name('editProfile');

Route::put('/update', [\App\Http\Controllers\ProfileController::class, 'updateProfile']) -> name('home');


// CYW(E)
