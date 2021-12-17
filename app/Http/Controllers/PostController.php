<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('post.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post=new Post();
      $post->user_id=auth()->user()->id;
      $post->title->$request->title;
      $post->description=$request->description();
      $post->save();
      if($request->photo){
        $extension=$request->photo->extension();
        $post->photo=$post->id.$extension;
        $post->save();
        $request->photo->storeAs('post',$post->photo,'public');
      }
    }

    public function show(Post $post)
    {
      return view('post.show');
    }

    public function edit(Post $post)
    {
      return view('post.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $post->user_id=auth()->user()->id;
      $post->title=$request->title;
      $post->description=$request->description;
      if($request->photo){
        $extension=$request->photo->extension();
        $post->photo=$post->id.$extension;
        $post->save();
        Storage::delete("/storage/post/{{$post->photo}}");
        $request->photo->storeAs('post',$post->photo,'public');
      }
      $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
