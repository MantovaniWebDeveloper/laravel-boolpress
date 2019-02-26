<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
      $posts = Post::all();

      return view("admin.home", compact('posts'));
    }

    public function create()
    {
        $categorie = Category::all();
      //  dd($categorie);
        return view("admin.create", compact('categorie'));
    }

    public function store(Request $request)
    {
        //recupero tutti i dati dal form
        $postData = $request->all();
        //dd($postData);

        $newPost = new Post();
        $newPost->fill($postData);
        $newPost->save();

        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categorie = Category::all(); //recupero nuovamente le categorie
        $post = Post::find($id); // metodo con find

        return view("admin.edit", compact('post','categorie'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $postData= $request->all();

      //  dd($postData);

        $post->update($postData);

        return redirect()->route('admin.index');

    }


    public function destroy($id)
    {
        //
    }
}
