@extends('layouts.app')
@section('content')
    <div class="w-full lg:w-11/12 mx-auto my-7">
      <chat-component :user="{{Auth::user()}}">
    </div>
@endsection