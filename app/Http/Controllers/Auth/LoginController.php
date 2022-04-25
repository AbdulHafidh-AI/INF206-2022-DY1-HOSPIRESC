<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
           if(Hash::check($request->password, $password)){
               // Activate session_start
                session_start();
                // Set session
                $_SESSION['login'] = true;
                $_SESSION['kode_user'] = $request->kode_user;
                // id
                $_SESSION['id'] = DB::table('users')->where('kode_user', $request->kode_user)->value('id');
                $_SESSION['name'] = DB::table('users')->where('kode_user', $request->kode_user)->value('name');
                $_SESSION['email'] = DB::table('users')->where('kode_user', $request->kode_user)->value('email');
                // No telp
                $_SESSION['no_telp'] = DB::table('users')->where('kode_user', $request->kode_user)->value('no_telp');
                // alamat
                $_SESSION['alamat'] = DB::table('users')->where('kode_user', $request->kode_user)->value('alamat');
                //no_izin
                $_SESSION['no_izin'] = DB::table('users')->where('kode_user', $request->kode_user)->value('no_izin');
                // //dd session id
                // //dd($_SESSION['id']);
                // dd($_SESSION['id']);
               return redirect('/pages/beranda');
           }
       }else {
           Alert::error('Kode User atau Password salah', 'Gagal Login');
           return redirect('/login');
       }


}
}