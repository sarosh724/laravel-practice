<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

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
    return view('Hello');
});

Route::get("users",[UserController::class,'show']);

Route::post("form",[UserController::class,'submit_form']);
Route::view("form","form");
Route::view('noaccess','noaccess');

# Employees routes

Route::get("employees",[EmployeeController::class,'show']);

# API call route

Route::get("api",[UserController::class,'api_call']);

Route::get("table",[UserController::class,'table']);

# File Upload
Route::view("upload","upload");
Route::post("upload",[UserController::class,'upload']);

# localization
Route::view("profile","profile");

#joins

Route::get("employees_data",[UserController::class,'employees_data']);

