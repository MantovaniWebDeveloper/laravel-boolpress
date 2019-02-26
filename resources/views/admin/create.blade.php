@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Aggiungi un post</h3>
    </div>
  </div>
  <form class="" action="index.html" method="post">
    <div class="form-group">
      <input type="text" class="form-control" name="titolo" placeholder="titolo">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="content" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <select class="form-control" name="categorie">
        @foreach ($categorie as $key => $categoria)
          <option value="">{{ $categoria->nomeCategoria}}</option>
        @endforeach
      </select>
    </div>
    <input type="submit" class="btn btn-success col-12" name="salvaPost" value="Salva">
  </form>
</div>
@endsection
