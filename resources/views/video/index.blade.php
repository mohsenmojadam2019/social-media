@extends('layouts.app')
@section('content')
 <div>
  @foreach ($videos as $video)
   <div>
     <div class="flex items-center">
      <img src="/storage/videos/{{$video->channel->photo}}" class="w-10 h-10 rounded-full m-1"> 
      <div>
       <p>{{$video->channel->name}}</p>
       <channel-follow-component :channel="{{$video->channel}}"/>
        <p>{{$video->created-at}}</p>
      </div>
     </div>
     <div>
      <h1 class="text-xl text-bold">{{$video->title}}</h1>
      <video src="/storage/videos/{{$video->source}}"></video>
     </div>
     <video-like-component/>
     <video-comment-component/>
   </div>   
  @endforeach
 </div>
@endsection