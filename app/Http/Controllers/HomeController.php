<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        $page_title = 'Multikart german shop';
        return view('welcome', compact('page_title'));
    }
}
