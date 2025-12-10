<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function profile() {

        return view('pages.profile');
    }

    public function achievements() {

        return view('pages.achievements');
    }

    public function gallery() {

        return view('pages.gallery');
    }

    public function contact() {
        
        return view('pages.contact');
    }
}
