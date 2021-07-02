<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $respectMihai = (object)['ID' => 1, 'nom' => 'Dorian', 'age' => '42', 'email' => 'Dorian_50g@gmail.com'];
        return view('users', compact('respectMihai'));
    }
}
