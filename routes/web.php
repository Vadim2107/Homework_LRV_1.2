<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\User;
use Illuminate\Support\Facades\View;

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

//Route::get('/', function () {
////    return view('user', ['name' => 'Vadik']);
//    return view('user', ['name' => env('NAME', 'Vadim')]);
//});
