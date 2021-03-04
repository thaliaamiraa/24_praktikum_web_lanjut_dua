<?php

use Illuminate\Support\Facades\Route;

//Praktikum 2 No 2
// Route:: get('/',[App\Http\Controllers\PageController::class,'index']);
// Route:: get('/about',[App\Http\Controllers\PageController::class,'About']);
// Route:: get('/articles/{id}',[App\Http\Controllers\PageController::class,'articles']);

//Praktikum 2 No 3
Route:: get('/',[App\Http\Controllers\HomeController::class,'index']);
Route:: get('/about',[App\Http\Controllers\AboutController::class,'About']);
Route:: get('/articles/{id}',[App\Http\Controllers\ArticlesController::class,'articles']);
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

// Route::get('/', function () {
//     return view('welcome');
// });

