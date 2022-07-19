<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController;

use App\Http\Controllers\DashboardController;

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

Route::get('login', [AuthenticationController::class, 'login'])->name('user.login');

Route::post('login', [AuthenticationController::class, 'loginTrigger'])->name('user.login_trigger');


Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth:admin');


//Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth:admin');

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
