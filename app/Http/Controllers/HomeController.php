<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view ('admin.index');
    }

    public function home(){
        return view ('home.index');
    }
}
