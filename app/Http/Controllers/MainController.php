<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {

        $name = 'Almas';
        return view('welcome', ['name'=>$name, ]);

    }
    
}
