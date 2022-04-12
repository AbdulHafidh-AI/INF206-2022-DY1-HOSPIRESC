<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Membuat fungsi index pada halaman login
     * @return view
     *
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Membuat fungsi login pada halaman login
     * @param Request $request request dari form login yang di submit
     * @return view tergantung pada inputan user
     *
     */
    public function login(Request $request)
    {
        
    }
}
