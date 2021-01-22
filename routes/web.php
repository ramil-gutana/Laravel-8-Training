<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/user',UserController::class);
Route::get('/blog',[BlogController::class,'create']);
Route::post('/blog',[BlogController::class,'store']);
Route::get('/blog/{blog}/edit',[BlogController::class,'edit']);
Route::put('/blog/{blog}',[BlogController::class,'update']);
