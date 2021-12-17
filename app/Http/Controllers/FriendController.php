<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use Illuminate\Http\Request;

class FriendController extends Controller
{
  public function index()
  {
    $user=auth()->user();
    $friendRequests=FriendRequest::where('to',$user->id)->get();
    $sentRequests=FriendRequest::where('from',$user->id)->get();
    $suggestedFriends=Friend::take(10)->get();
    return view('friend.index',['sentRequests'=>$sentRequests,'friendRequests'=>$friendRequests,'suggestedFriends'=>$suggestedFriends]);  
  }
  public function follow()
  {

  }
  public function unFollow()
  {

  }
  public function block()
  {
      
  }
}
