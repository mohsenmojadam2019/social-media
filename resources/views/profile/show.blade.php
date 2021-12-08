@extends('layouts.app')
@section('content')
 <div>
  <p class="text-xl">age: {{$profile->age}}</p>
  <p class="text-xl">gender: {{$profile->gender}}</p>
  <img src="" class="w-48">
  <a href="{{route('profile.edit')}}"></a>
 </div>   
@endsection