<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function About(){
        return view('about',[
            "title" => "Tentang Kami"
        ]);
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function Contact(){
        return view('kontak',[
            "title" => "Kontak"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home(){
        return view('home',[
            "title" => "Home"
        ]);
    }
}
