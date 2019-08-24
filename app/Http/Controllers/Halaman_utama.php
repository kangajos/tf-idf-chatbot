<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman_utama extends Controller
{
    public function index()
    {
    	return view('halaman_utama');
    }
}
