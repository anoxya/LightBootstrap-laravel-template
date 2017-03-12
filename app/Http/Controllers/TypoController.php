<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypoController extends Controller
{
    public function index()
    {
        return view('layouts.typo.index');
    }
}
