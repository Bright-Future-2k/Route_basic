<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use core_question\bank\view;

class HomeController extends Controller
{
    public function index (){
        return view('home');
    }
}
