<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function generic(){
    	return view('generic');
    }
    public function element(){
    	return view('element');
}
}
