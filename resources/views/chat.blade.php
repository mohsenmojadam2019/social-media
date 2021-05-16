@extends('layouts.app')
@section('content')
    <div>
      <chat-component user-id="{{Auth::user()->id}}"> 
    </div>
@endsection