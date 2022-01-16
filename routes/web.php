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

// About Us
Route::get('/aboutus', [HomeController::class, 'viewAboutUs'])->name("aboutUs");

// Properties
Route::get('/properties', [PropertyController::class, 'viewHomePage'])->name("propertiesHome");

// Login
Route::get('/login', [LoginController::class, 'loginUser'])->name("loginUser");
Route::post('/login', [LoginController::class, 'login']);

// Register
Route::get('/register', [LoginController::class, 'registerUser'])->name("registerUser");
Route::post('/register', [LoginController::class, 'register']);

// View Detail
Route::get('/propertiesdetail/{id}', [PropertyController::class, 'viewPropertyDetail']);

// Update
Route::get('/properties/update/{id}', [PropertyController::class, 'viewBuildingUpdate']);
Route::patch('/properties/update/{id}', [PropertyController::class, 'updatePropertyDesc'])->name('updatePropertyDesc');

// Add Property
Route::get('/properties/add', [PropertyController::class, 'viewBuildingAdd']);
Route::post('/properties/add', [PropertyController::class, 'addPropertyDesc'])->name('updatePropertyDesc');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
