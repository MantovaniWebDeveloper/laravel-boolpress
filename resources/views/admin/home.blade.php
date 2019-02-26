@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Pannello amministrativo</h3>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">titolo</th>
          <th scope="col">categoria</th>
          <th scope="col">Modifica</th>
          <th scope="col">cancella</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $key => $post)
            <tr>
              <th>{{$post->id}}</th>
              <td>{{$post->titolo}}</td>
              <td>{{$post->category->nomeCategoria}}</td>
              <td><a href="{{route('admin.edit', $post->id)}}"><button class="btn btn-warning">Modifica</button></a></td>
              <td></td>
            </tr>
         @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
