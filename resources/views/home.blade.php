@extends('layouts.app')

@section('content')
<div>
    @foreach ($posts as $post)
     <div>
      <p>{{$post->title}}</p>
      <img src="'posts'.{{$post->id}}" alt="">
      <p>{{$post->body}}</p>
      <button>like</button>
      <button>dislike</button>
      <button>comment</button>   
    </div>        
    @endforeach
</div>
@endsection
