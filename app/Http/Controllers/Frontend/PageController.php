<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function features()
    {
        return view('frontend.features');
    }

    public function resources()
    {
        return view('frontend.resource');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
