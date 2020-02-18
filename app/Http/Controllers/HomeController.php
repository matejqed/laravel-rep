<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
}