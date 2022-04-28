<?php

namespace App\Http\Controllers\Pages;

use App\Models\Category;
use Illuminate\Http\Request;
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
        if (isset($_SESSION['login'])) {
            return view('pages.minta_tolong', [
                "title" => "Minta tolong"
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
}
