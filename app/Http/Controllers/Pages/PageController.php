<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            return redirect('/home');
        }
    }
}
