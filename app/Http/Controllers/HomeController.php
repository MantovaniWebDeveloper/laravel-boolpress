<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){

    //dd("siamo dentro lato client");
    return view("index");
  }
}
