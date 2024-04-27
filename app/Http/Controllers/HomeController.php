<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katgori;
use App\Models\Makanan;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

}
