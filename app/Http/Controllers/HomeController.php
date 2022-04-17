<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application Home.
     * 
     */
    public function index(){
        return view('home',[
            "title" => "Home"
        ]);
    }
}
