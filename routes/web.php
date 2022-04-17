<?php

use App\Http\Controllers\Auth\LoginController;
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

// Halaman Beranda
Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

// Halamaan login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Halaman Tentang kami
Route::get('/tentang kami', function () {
    return view('about',[
        "title" => "Tentang Kami"
    ]);
});



//Halamaan kontak
Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "Kontak"
    ]);
});


// Halaman Setelah Login
Route::get('/beranda', function () {
    return view('beranda',[
        "title" => "beranda"
    ]);
});
