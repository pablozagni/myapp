<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        if( auth()->guest() ) {
            // dd( 'home');
            return view('guest.home');
        } else {
            if( ! auth()->user()->enabled ) {
                // dd('wait');
                return view('user.wait');
            } else {
                // dd('dashboard');
                return view('user.dashboard');
            }
        }
    }

    public function contacto() {
        return view('guest.contacto');
    }
}
