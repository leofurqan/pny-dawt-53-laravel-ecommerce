<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return view('website.index');
    }

    public function shop() {
        return view('website.shop');
    }

    public function cart() {

    }

    public function checkout() {

    }

    public function about() {
        return view('website.about');
    }

    public function contact() {
        return view('website.contact');
    }
}
