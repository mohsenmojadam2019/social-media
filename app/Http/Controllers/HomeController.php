<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        $friends=$user->profile->users;
        $posts=[];
        foreach($friends as $friend){
          $friendPosts=$friend->posts;
          foreach($friendPosts as $post){
            array_push($posts,$post);
          }
        }
        return view('home',['friends'=>$friends,'posts'=>$posts]);
    }
    public function chat()
    {
        return view('chat');
    }
}
