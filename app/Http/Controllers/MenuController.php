<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu0110(){
        return view("menu0110");
    }
    public function home(){
        return view("home");
    }
    public function kontak0110(){
        return view("kontak0110");
    }
    public function artikel0110(){
        return view("artikel0110");
    }
}
