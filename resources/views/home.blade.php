@extends('layouts.app')
@section('content')
<div class="flex">
  <div class="w-1/4 p-2">
   <div class="flex items-center">
     <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-10 h-10 rounded-full m-2">
     <p class="text-xl font-medium">{{$user->name}}</p>
   </div>
   <div>
     <ul>
       <li class="my-2 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="px-2 bi bi-people-fill text-first w-12" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
        <p class="text-2xl font-semibold capitalize">find friends</p>
       </li>
       <li class="my-2 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-alarm w-12 px-2 text-first" viewBox="0 0 16 16">
          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
        </svg>
        <p class="text-2xl font-semibold capitalize">memories</p>
       </li>
       <li class="my-2 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill w-12 text-first px-2" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
        <p class="text-2xl font-semibold capitalize">groups</p>
       </li>
       <li class="my-2 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="px-2 bi bi-people-fill text-first w-12" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
        <p class="text-2xl font-semibold capitalize">channels</p>
       </li>
       <li class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="px-2 bi bi-people-fill text-first w-12" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
        <p class="text-2xl font-semibold capitalize">pages</p>
       </li>
       <li class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-btn-fill text-first w-12 px-2" viewBox="0 0 16 16">
          <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        <p class="text-2xl font-semibold capitalize">watch</p>
       </li>
     </ul>
   </div>
  </div>
  <div class="w-1/2 mt-3">
    <a href="/post/create" class='hover:no-underline'>
     <div class="flex bg-white rounded-xl p-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle text-first w-12" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
      <div class="my-auto mx-3">
        <h1 class="text-2xl">create a story</h1>
        <p class="text-xl">share a photo or write something</p>
      </div>
     </div>
    </a>
    @foreach ($posts as $post)
    <div>
     <p>{{$post->title}}</p>
     <img src="'posts'.{{$post->id}}" class="w-48">
     <p class="">{{$post->body}}</p>
     <like-component user-id="{{Auth::user()->id}}" post-id="{{$post->id}}"/>
     <comment-component user-id="{{Auth::user()->id}}" post-id="{{$post->id}}"/>   
   </div>        
   @endforeach
  </div>
  <div class="w-1/4">
   <h1>contacts</h1>
   {{-- @foreach ($contacts as $contact)
    <div>
       
    </div>   
   @endforeach --}}
  </div>
</div>
@endsection
