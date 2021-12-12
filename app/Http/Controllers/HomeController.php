<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('home',['user'=>$user,'friends'=>$friends,'posts'=>$posts]);
    }

    public function chat()
    {
        return view('chat');
    }

}
