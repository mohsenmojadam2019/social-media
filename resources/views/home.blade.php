@extends('layouts.app')
@section('content')
<div class="flex">
  {{-- <div class="w-1/4">
   @foreach ($friends as $friend)
     <div>
      <img src="/storage/users/profilepicture/{{$user->profile->avatar}}" >
      <p>{{$user->name}}</p>  
     </div>  
   @endforeach
  </div>
  <div class="w-1/2">
    @foreach ($posts as $post)
    <div>
     <p>{{$post->title}}</p>
     <img src="'posts'.{{$post->id}}" alt="">
     <p>{{$post->body}}</p>
     <like-component user-id="{{Auth::user()->id}}" post-id="{{$post->id}}"/>
     <comment-component user-id="{{Auth::user()->id}}" post-id="{{$post->id}}"/>   
   </div>        
   @endforeach
  </div> --}}
  <div class="w-1/2">
   
  </div>
</div>
@endsection
