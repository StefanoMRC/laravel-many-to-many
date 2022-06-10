@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center py-5">
    <div class="card" style="width: 18rem;">
        <img src="{{$post->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          @if ($post->category)
             <p class="card-text">
               <span class="badge badge-pill badge-{{$post->Category->color}} ">{{$post->Category->name}}</span>
              </p> 
          @endif
          
          <p class="card-text">{{$post->content}}</p>
          <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Elimina</button> 
          </form>
        </div>
      </div>
</div>


@endsection