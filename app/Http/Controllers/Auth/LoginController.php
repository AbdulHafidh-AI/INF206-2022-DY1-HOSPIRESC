<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
       $hasil = DB::table('users')->where('kode_user', $request->kode_user)->count();
       $password = DB::table('users')->where('kode_user', $request->kode_user)->value('password');
       

       if($hasil == 1){
           if($request->password == $password){
               return view('beranda',[
                   "title" => "Beranda"
               ]);
           }
       }else {
           echo "<script>alert('Kode User atau Password Salah');</script>";
           return view('auth.login',[
               "title" => "Login"
           ]);
       }


}
}