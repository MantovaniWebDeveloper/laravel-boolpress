<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function postSlug($post_slug){

    $post = Post::where("post_slug", $post_slug)->first();
  //  dd($post);

    return view("post", compact('post'));
  }
}
