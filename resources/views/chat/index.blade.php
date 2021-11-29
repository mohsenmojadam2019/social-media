@extends('layouts.app')
@section('content')
    <div class="w-3/4 mx-auto my-10">
      <chat-component user="{{Auth::user()}}"> 
    </div>
@endsection