<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiterasiController extends Controller
{
    public function index()
    {
        return view('literasi.index');
    }

    public function bilikcerita()
    {
        return view('bilikcerita.index');
    }
}
