<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'mainController@home') ;

Route::get('/home', function () {
    return view('home');
});

Route::get('/create', function () {
    return view('create');
});
Route::get('/administratoreHome/{id}', function ($id) {
    return view('administratoreHome $id');
})->where([
    'id' => '[0-9]+'
])->name ('administratorHome.show');

Route::get('/login', function () {
    return view('login');
});
