<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('guest.home');
    }

    public function contact() {
        return view('guest.contact');
    }

    public function dashboard() {
        return view('user.dashboard');
    }
}
