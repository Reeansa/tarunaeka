<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.beranda.index');
    }
    public function about() {
        return view('frontend.pages.about.index');
    }
    public function services() {
        return view('frontend.pages.services.index');
    }
    public function show() {
        return view('frontend.pages.services.show');
    }
    public function contact() {
        return view('frontend.pages.contact.index');
    }
}
