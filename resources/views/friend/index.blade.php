@extends('layouts.app')
@section('content')
 <div>
   <div class="flex m-2 p-2">
     <h1 class="text-2xl font-bold">friend requests</h1>
     @foreach ($frindrequests as $friend)
      <div class="p-2 m-2 bg-white">
      <img src="/storage/users/{{$user->avatar}}" class="w-32 rounded-xl">
       <p class="text-xl text-bold">{{$friend->name}}</p>
       <acceptrequest-component />
       <removerequest-component />
      </div>   
     @endforeach
   </div>
   <div class="flexm-2 p-2">
    <h1 class="text-2xl font-bold">people you may know</h1>
    @foreach ($peoples as $person)
     <div>
     <img src="/storage/users/{{$person->avatar}}" class="w-32 rounded-xl">
      <p>{{$person->name}}</p>
      <addfriend-component />
      <removefriend-component />
     </div>   
    @endforeach
  </div>
 </div>
@endsection