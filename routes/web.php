<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\User;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\TodoController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo', [TodoController::class, 'store']);
Route::get('/todo/{id}', [TodoController::class, 'show']);
//Route::get('/todo/{todo}/edit', [TodoController::class, 'edit']);
//Route::put('/todo/{todo}', [TodoController::class, 'update']);
//Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);

//Route::get('/', function () {
////    return view('user', ['name' => 'Vadik']);
//    return view('user', ['name' => env('NAME', 'Vadim')]);
//});
