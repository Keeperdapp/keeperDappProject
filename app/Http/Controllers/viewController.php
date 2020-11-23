<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function privacy() {
        return view('privacy');
    }
    public function termsconditions() {
        return view('termsConditions');
    }
}
