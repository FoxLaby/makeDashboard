<?php

namespace FoxLaby\Mudir\App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MudirController extends Controller
{
    public function login(Request $request)
    {
        return view('mudir::login');
    }   
}