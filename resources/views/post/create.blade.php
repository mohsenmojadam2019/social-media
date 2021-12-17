@extends('layouts.app')
@section('content')
  <div class="w-full lg:w-1/2 mx-auto rounded-xl bg-white p-3 m-3">
    <h1 class="font-bold text-2xl text-center broder-b border-gray-300">create post</h1>
   <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    <label for="title" class="text-xl">title:</label> 
    <input type="text" name="title" class="text-xl text-first my-2 w-full text-xl p-2 rounded-xl border-2 border-gray-300">
    <label for="description" class="text-xl">description:</label>
     <textarea name="description" class="text-xl text-tiruhakim w-full h-28 rounded-xl border-2 border-gray-400 my-2"></textarea>
     <label for="file" class="text-xl">photo(optional):</label>
     <input type="file" name="photo" class="text-2xl my-3 block">
     <input type="submit" value="create post" class="block py-2 px-4 my-3 mx-auto text-white bg-first text-2xl rounded-xl">
   </form>
  </div>  
@endsection