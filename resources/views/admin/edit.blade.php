@extends('layouts.app')
@section('content')
    <h1 class="text-center text-capitalize pb-4">modifica qui il post selezionato</h1>
    <form class="container" action="{{route('admin.posts.update', $post->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Titolo</span>
            <input id="title" name="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$post->title}}">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
          <select name="category_id" id="category">
            <option value="">Nessuna categoria</option>
            @foreach ($categories as $category)
                <option 
                @if (old('category_id', $post->category_id)==$category->id)
                      selected 
                  @endif
                value="{{$category->id}}"
                  
                  >{{$category->name}}</option>
            @endforeach
            
          </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Content</span>
            <textarea id="content" name="content" class="form-control" aria-label="With textarea" style="height: 200px">{{$post->content}}</textarea>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Immagine</span>
            <input id="image" name="image" type="url" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$post->image}}">
          </div>
          <button type="submit" class="btn btn-success"> Modifica</button>
    </form>
@endsection