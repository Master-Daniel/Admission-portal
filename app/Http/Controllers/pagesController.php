<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function apply() {
        $title = 'Admission Application';
        return view('auth.student-registration', compact('title'));
    }

    public function admission_status() {
        $title = 'Check Admission Status';
        return view('Auth.student-login', compact('title'));
    }

    public function contact() {
        $title = 'Contact Us';
        return view('contact', compact('title'));
    }
}
