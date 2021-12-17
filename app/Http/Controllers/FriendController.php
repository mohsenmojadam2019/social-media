<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    $user=auth()->user();
    $friendRequests=FriendRequest::where('to',$user->id)->get();
    $sentRequests=FriendRequest::where('from',$user->id)->get();
    $suggestedFriends=User::inRandomOrder()->take(10)->get();
    return view('friend.index',['sentRequests'=>$sentRequests,'friendRequests'=>$friendRequests,'suggestedFriends'=>$suggestedFriends]);  
  }
  public function sendFrienRequest(Request $request)
  {
    $friendRequest=new FriendRequest();
    $friendRequest->from=auth()->user()->id;
    $friendRequest->to=$request->userId;
    $friendRequest->save();
  }
  public function removeFriendRequest(Request $request)
  {
    $friendRequest=FriendRequest::where([['from'=>auth()->user()->id],['to'=>$request->userId]]);
    $friendRequest->delete();
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
