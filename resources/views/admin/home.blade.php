@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Pannello amministrativo</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="wrapBtn pt-2 pb-2">
        <a href="{{ route('admin.create')}}" class="btn btn-success ">Nuovo post</a>
      </div>
    </div>
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
              <td>
                  <form class="" action="{{ route('admin.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" name="" value="Cancella">
                  </form>
              </td>
            </tr>
         @endforeach
      </tbody>
    </table>
</div>
@endsection
