<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function categorySlug($category_slug){

      $categoria = Category::where("category_slug", $category_slug)->first();
      //se la categoria non esiste
      if(empty($categoria)){
        abort(404);
      }
      //inversione
      $postCercati = $categoria->posts;

      return view("category", compact('postCercati'));
    }
}
