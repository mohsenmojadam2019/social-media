@extends('layouts.app')
@section('content')
 <div class="flex mt-3">
   <div class="w-1/4 bg-blue-200">

   </div>
    <div class="w-1/2 bg-gray-200">
     <h1 class="text-2xl font-bold text-center mb-2">people you may know</h1>
     <div class="flex flex-wrap justify-center">
      @foreach ($suggestedFriends as $friend)
       <div>
        <img src="https://cdn-media-1.freecodecamp.org/images/0*xkJgg-6HskYrQ3N7.jpeg" class="w-64 rounded-xl">
        <p class="text-xl text-bold text-center">{{$friend->name}}</p>
        <addfriend-component />
        <removefriend-component />
       </div>   
      @endforeach
     </div>
    </div>
    <div class="w-1/4 bg-green-200">
     <h1 class="text-2xl font-bold text-center">friend requests({{$friendRequests->count()}})</h1>
     <div class="flex flex-wrap">
      @foreach ($friendRequests as $friend)
       <div class="p-2 m-2">
        <img src="https://cdn-media-1.freecodecamp.org/images/0*xkJgg-6HskYrQ3N7.jpeg" class="w-64">
        <p class="text-xl text-bold text-center">{{$friend->name}}</p>
        <acceptrequest-component />
        <removerequest-component />
      </div>   
      @endforeach
     </div>
    </div>
 </div>
@endsection