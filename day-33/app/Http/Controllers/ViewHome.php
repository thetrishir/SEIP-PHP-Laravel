<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewHome extends Controller
{
    public function viewHome()
    {
        return view('home.home');
    }
}
