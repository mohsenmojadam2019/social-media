@extends('layouts.app')
@section('content')
<div class="flex">
  <div class="w-1/4">
   <div class="flex">
     <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-10 h-10 rounded-full m-2">
     <p class="text-xl font-medium">{{$user->name}}</p>
   </div>
   @foreach ($friends as $friend)
     <div>
      <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-10 h-10 rounded-full m-2">
      <p class="text-lg font-medium">{{$friend->name}}</p>  
     </div>  
   @endforeach
  </div>
  <div class="w-1/2 border-2">
    @foreach ($posts as $post)
    <div>
     <p>{{$post->title}}</p>
     <img src="'posts'.{{$post->id}}" alt="">
     <p>{{$post->body}}</p>
     <like-component user-id="{{Auth::user()->id}}" post-id="{{$post->id}}"/>
     <comment-component user-id="{{Auth::user()->id}}" post-id="{{$post->id}}"/>   
   </div>        
   @endforeach
  </div>
  <div class="w-1/4">
   
  </div>
</div>
@endsection
