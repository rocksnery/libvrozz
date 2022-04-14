<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class HomeController extends Controller
{
    public function __invoke(){
        //return view('welcome');
        return view('home');
        
    }
}
