<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\LoginController;
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

// Home
Route::resource('/', HomeController::class);

// Properties
Route::get('/properties', [PropertyController::class, 'viewHomePage'])->name("propertiesHome");

// Login
Route::get('/login', [LoginController::class, 'loginUser'])->name("loginUser");
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'registerUser'])->name("registerUser");
Route::post('/register', [LoginController::class, 'register']);

// fix me v
Route::get('/propertiesdetail/{id}', [PropertyController::class, 'viewPropertyDetail']);
