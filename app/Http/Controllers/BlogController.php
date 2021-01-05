<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        if(Auth::user()){
            return view("blog2");

        }
        else{
            return view("blog");
        }
        
    }
}