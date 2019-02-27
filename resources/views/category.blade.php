@extends('layouts.front')
@section('content')
  @include('_partials.header')
  <main class="py-4">
    <div class="jumbotron jumbotron-fluid">

        <div class="container">
          <h1 class="display-4">Riceca per categoria : {{$category->nomeCategoria}}</h1>
        </div>
    </div>
    <div class="container">
      @foreach ($posts as $key => $post)
        <div class="containerPost">
          <div class="wrapContent">
            <h3 class="titoloPost">{{$post->titolo}}</h3> <small>{{$post->category->nomeCategoria}}</small>
            <p class="contentPost">{{$post->content}}</p>
          </div>
        </div>
      @endforeach
    </div>
  </main>
@endsection
