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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Tangkap data dari form
    $email = $request->input('email');
    $password = $request->input('password');
    $role = $request->input('role');

    // Logika untuk mengarahkan berdasarkan role
    if ($role === 'customer') {
        return redirect('/kendaraan'); // Arahkan ke halaman kendaraan
    } elseif ($role === 'admin') {
        return redirect('/admin-profile'); // Arahkan ke halaman admin
    } else {
        return back()->withErrors(['error' => 'Role tidak valid!']);
    }
});



Route::get('/singup', function () {
    return view('singup');
});

Route::get('/kendaraan', function () {
    return view('kendaraan');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/admin-profile', function () {
    return view('admin-profile');
});


Route::resource('cars', CarController::class); // /create /edit /store /update /destroy /index /show
