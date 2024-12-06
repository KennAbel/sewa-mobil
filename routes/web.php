<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/singup', function () {
    return view('singup');
});

Route::get('/kendaraan', function () {
    return view('kendaraan');
});


Route::resource('cars', CarController::class); // /create /edit /store /update /destroy /index /show
