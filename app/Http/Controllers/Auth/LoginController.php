<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function login(Request $request){
        $attr = $request->validate([
            'kode_user' => 'required',
            'password' => 'required'
        ]);

       // Check kode_user dan password dari tabel user
         if(Auth::attempt($attr)){
                return redirect()->route('home');
         }
        

    }


}
