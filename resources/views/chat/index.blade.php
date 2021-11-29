@extends('layouts.app')
@section('content')
    <div class="w-5/6 mx-auto my-10">
      <chat-component :user="{{Auth::user()}}"> 
    </div>
@endsection