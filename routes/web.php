<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::resource('bus',BusController::class);
Route::resource('trip',TripController::class);
Route::resource('location',LocationController::class);
Route::resource('user',UserController::class);
Route::resource('ticket',TicketController::class);

// Route::resource('seat',SeatController::class);
// Route::resource('schedule',SheduleController::class);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
