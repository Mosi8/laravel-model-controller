<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $film = Movie::all();
        return view('welcome', ['ls_film'=>$film]);
    }
    //
}
