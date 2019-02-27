<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class HomeController extends Controller
{
  public function index(){

    $posts = Post::orderBy('created_at','DESC')->limit(5)->get();
    //dd("siamo dentro lato client");
    return view("index", compact('posts'));
  }
}
