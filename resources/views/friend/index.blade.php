@extends('layouts.app')
@section('content')
 <div class="flex">
   <div class="w-1/4 bg-white h-screen">
    <h1 class="text-bold text-3xl m-2">Friends</h1>
    <ul>
      <li class="p-1 hover:bg-gray-200">
        <a href="/friend" class="flex items-center hover:no-underline">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-2 text-first w-8 bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
          </svg>
          <p class="text-xl font-bold">Home</p>
        </a>
      </li>
      <li class="p-1 hover:bg-gray-200">
        <a href="/friend/requests" class="flex items-center hover:no-underline">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-2 text-first w-8 bi bi-person-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
          <p class="text-xl font-bold">Friend Requests</p>
        </a>
      </li>
      <li class="p-1 hover:bg-gray-200">
        <a href="/friend/suggestions" class="flex items-center hover:no-underline">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-2 text-first w-8 bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg>
          <p class="text-xl font-bold">Suggestions</p>
        </a>
      </li>
      <li class="p-1 hover:bg-gray-200">
        <a href="/friend/list" class="flex items-center hover:no-underline">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-2 text-first w-8 bi bi-person-lines-fill" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
          </svg>
          <p class="text-xl font-bold">All Friends</p>
        </a>
      </li>
      <li class="p-1 hover:bg-gray-200">
        <a href="/friend" class="flex items-center hover:no-underline">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-2 text-first w-8 bi bi-gift-fill" viewBox="0 0 16 16">
            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
          </svg>
          <p class="text-xl font-bold">Birthdays</p>
        </a>
      </li>
      <li class="p-1 hover:bg-gray-200">
        <a href="/friend" class="flex items-center hover:no-underline">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-2 text-first w-8 bi bi-person-lines-fill" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
          </svg>
          <p class="text-xl font-bold">Custom Lists</p>
        </a>
      </li>
    </ul>
   </div>
    <div class="w-1/2 mt-3 p-2">
     <h1 class="text-2xl font-bold mb-3">people you may know</h1>
     <div class="flex flex-wrap">
      @foreach ($suggestedFriends as $friend)
       <div>
        <img src="https://cdn-media-1.freecodecamp.org/images/0*xkJgg-6HskYrQ3N7.jpeg" class="w-64 rounded-xl">
        <p class="text-2xl font-bold text-center">{{$friend->name}}</p>
        <addfriend-component />
        <removefriend-component />
       </div>   
      @endforeach
     </div>
    </div>
    <div class="w-1/4 mt-3">
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