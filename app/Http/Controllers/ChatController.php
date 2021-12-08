<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\NewMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('chat.index');
    }
   public function friends()
   {
     $profile=auth()->user()->profile;
     $friends=$profile->users;
     $userId=(int) auth()->user()->id;
     foreach($friends as $friend){
      $friendId=(int) $friend->id;
      if($userId<$friendId){
         $chatroom=auth()->user()->id.$friend->id;
       }
       else{
         $chatroom=$friend->id.auth()->user()->id;
       }
       $friend->lastMessage=Message::where('chatroom',$chatroom)->latest()->first();
     }
     return response()->json(['friends'=>$friends]);
   }
   public function messages(Request $request)
   {
     $chatroom=$request->chatroom;
     $messages=Message::where('chatroom',$chatroom)->latest()->get();
     return response()->json(['messages'=>$messages]);
   }
   public function sendMessage(Request $request)
   {
    $message=new Message();
    $message->chatroom=$request->chatroom;
    $message->from=auth()->user()->id;
    $message->to=$request->friendId;
    $message->body=$request->message;
    $message->save(); 
    broadcast(new NewMessage(auth()->user()->id,$request->message,$request->friendId))->toOthers();
    return response()->json(['message'=>$message]);
   }
}
