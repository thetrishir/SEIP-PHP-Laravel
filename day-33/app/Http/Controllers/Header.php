<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Header extends Controller
{
    public function Header()
    {
        return view('header.header');
    }
}
