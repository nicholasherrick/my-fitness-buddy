<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $site_title = 'My Fitness Buddy';
        return view('home', compact('site_title'));
    }
}
