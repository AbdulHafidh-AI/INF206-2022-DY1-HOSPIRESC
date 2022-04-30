<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Pages\PertolonganController;

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

/**
 * Halaman Setelah Login
 */
// Jika url nya mengarah ke logout maka akan diarahkan ke halaman login dan membuat sesi login false
Route::get('/pages/logout', [LogoutController::class, 'logout'])->name('logout');
// Jika diarahkan ke halaman beranda maka akan diarahkan ke halaman beranda jika sesi login true
Route::get('/pages/beranda', [UserController::class, 'Beranda'])->name('beranda');
// Jika diarahkan ke halaman profile maka akan diarahkan ke halaman profile jika sesi login true
Route::get('/pages/profile', [PageController::class, 'profile'])->name('profile');
// Jika diarahkan ke halaman minta tolong maka akan diarahkan ke minta tolong jika sesi login true
Route::get('/pages/minta tolong', [PageController::class, 'mintaTolong'])->name('minta_tolong');
Route::post('/pages/minta tolong', [PertolonganController::class, 'store']);
// Jika diarahkan ke halaman about setelah login maka akan diarahkan ke halaman about jika sesi login true
Route::get('/pages/about', [PageController::class, 'about'])->name('about');  
Route::get('/pages/kontak', [PageController::class, 'kontak'])->name('about');   
// Jika diarahkan ke halaman forum maka akan diarahkan ke halaman forum jika sesi login true
Route::get('/pages/forum', [PageController::class, 'forum'])->name('forum');
// Jika diarahkan ke halaman riwayat maka akan diarahkan ke halaman riwayat jika sesi login true
Route::get('/pages/riwayat', [PageController::class, 'riwayat'])->name('riwayat');
// Jika user menekan salah satu tombol menolong pada daftar card maka akan diarahkan ke halaman riwayat jika sesi login true dan menambahkan data foreign key ke tabel post
Route::get('/pages/riwayat/{id}', [PertolonganController::class, 'edit'])->name('riwayat');



