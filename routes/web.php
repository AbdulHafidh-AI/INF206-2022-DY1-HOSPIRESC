<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

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



// Halamaan login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Halaman Tentang kami
Route::get('/tentang kami', [UserController::class, 'About'])->name('about');
// Halaman kontak
Route::get('/kontak', [UserController::class, 'Contact'])->name('contact');
// Halaman Home
Route::get('/', [UserController::class, 'Home'])->name('home');

Route::get('/logout', function () {
    session_start();
    session_destroy();
    return redirect('/login');
});

Route::get('/beranda', function () {
    session_start();
    if (isset($_SESSION['login'])) {
        return view('beranda', [
            "title" => "Beranda"
        ]);
    } else {
        return redirect('/login');
    }
});
