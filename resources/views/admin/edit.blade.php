@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Stai modificando il post con id {{$post->id}}</h3>
    </div>
  </div>
  <form class="" action="{{ route('admin.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <input type="text" class="form-control" name="titolo" placeholder="titolo" value="{{$post->titolo}}">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="content" rows="8" cols="80" placeholder="{{$post->content}}"></textarea>
    </div>
    <div class="form-group">
      <select class="form-control" name="category_id">
      @foreach ($categorie as $key => $categoria)
          <option value="{{ $categoria->id}}">{{ $categoria->nomeCategoria}}</option>
      @endforeach
      </select>
    </div>
    <input type="submit" class="btn btn-success col-12" name="salvaPost" value="Salva">
  </form>
</div>
@endsection
