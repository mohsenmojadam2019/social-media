<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\NewMessage;
use App\Models\ChatRoom;
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
     $userId=auth()->user()->id;
     $friends=ChatRoom::where('room',"LIKE","%${userId}%");
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
     $messages=Message::where('chatroom',$chatroom)->get();
     return response()->json(['messages'=>$messages]);
   }
   public function sendMessage(Request $request)
   {
    $chatroom=ChatRoom::where('room',$request->chatroom);
    if($chatroom){

    }
    $message=new Message();
    $message->chatroom=$chatroom;
    $message->from=auth()->user()->id;
    $message->to=$request->friendId;
    $message->body=$request->message;
    $message->save();
    broadcast(new NewMessage($request->message,$request->chatroom))->toOthers();
    return response()->json(['message'=>$message]);
   }
}
