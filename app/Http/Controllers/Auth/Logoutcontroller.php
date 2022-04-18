<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logoutcontroller extends Controller
{
    /**
     * Sebuah Method Controller yang digunakan untuk melakukan proses logout
     */
    public function logout(Request $request){
        // Activate session_start
        session_start();
        // Unset session
        unset($_SESSION['id']);
        unset($_SESSION['kode_user']);
        unset($_SESSION['nama_user']);
        unset($_SESSION['email']);
        unset($_SESSION['no_telp']);
        unset($_SESSION['alamat']);
        unset($_SESSION['no_izin']);
        session_destroy();
        return redirect('/login');
    }
}
