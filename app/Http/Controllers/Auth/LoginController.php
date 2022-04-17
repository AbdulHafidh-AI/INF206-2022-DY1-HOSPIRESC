<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Sebuah Method Controller yang digunakan untuk menampilkan halaman login
     * @return view halaman login yang berisi form login karena routing yang diterima adalah /login
     */
    public function index()
    {
        return view('auth.login',[
            "title" => "Login"
        ]);
    }
    /**
     * Sebuah Method Controller yang digunakan untuk melakukan proses login
     * 
     */
    public function login(){
        dd('SELAMAT DATANG KE DALAM APLIKASI HOSPIRESC ^_^');
    }
}
