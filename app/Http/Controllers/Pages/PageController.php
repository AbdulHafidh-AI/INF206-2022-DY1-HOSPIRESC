<?php

namespace App\Http\Controllers\Pages;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
     /**
     * Halaman Profile
     * @return \Illuminate\Http\Response
     */
    public function Profile()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            return view('pages.profile', [
                "title" => "Profile"
            ]);
        } else {
            return redirect('/');
        }
    }
    /**
     * Halaman Minta tolong
     * @return \Illuminate\Http\Response
     */
    public function MintaTolong(){
        session_start();
        $alat_medis = DB::table('table_alat_medis')->get();
        if (isset($_SESSION['login'])) {
            return view('pages.minta_tolong', [
                "title" => "Minta tolong",
                "alat_medis" => $alat_medis,
            ]);
        } else {
            return redirect('/');
        }
    }
    /**
     * Halaman tentang kami setelah login
     * @return \Illuminate\Http\Response
     */
    public function about(){
        session_start();
        if (isset($_SESSION['login'])) {
            return view('pages.about', [
                "title" => "Tentang Kami",
                "status" => "login"
            ]);
        } else {
            return redirect('/');
        }
    }

     /**
     * Halaman tentang kami setelah login
     * @return \Illuminate\Http\Response
     */
    public function kontak(){
        session_start();
        if (isset($_SESSION['login'])) {
            return view('pages.kontak', [
                "title" => "kontak",
                "status" => "login"
            ]);
        } else {
            return redirect('/');
        }
    }
    /**
     * Halaman forum setelah login
     * @return \Illuminate\Http\Response
     */
    public function forum(){
        session_start();
        if (isset($_SESSION['login'])) {
            $pertolongan = Category::all();
            return view('pages.forum', [
                "title" => "Forum",
                "status" => "login",
                'pertolongan' => $pertolongan
            ]);
        } else {
            return redirect('/');
        }
    }


    /**
     * Halaman Riwayat setelah login
     * @return \Illuminate\Http\Response
     */
    public function riwayat(){
        session_start();

        $riwayat = Post::all();
        if (isset($_SESSION['login'])) {
            return view('pages.riwayat', [
                "title" => "riwayat",
                "status" => "login",
                "riwayat" => $riwayat
            ]);
        } else {
            return redirect('/');
        }
     }

    

}
