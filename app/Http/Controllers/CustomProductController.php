<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomProductController extends Controller
{
    public function index(){
        return view('custom.index');
    }

    public function create(){
        return view('custom.create');
    }
}
