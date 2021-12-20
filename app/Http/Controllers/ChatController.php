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
     $chatrooms=ChatRoom::where('room',"LIKE","%${userId}%")->get();
      if($chatrooms){
       foreach ($chatrooms as $chatroom) {
        $room=$chatroom->room;
        $first_char=substr($room,0,1);
        if($first_char==$userId){
          $friendId=substr($room,1,1);
        }
        else{
          $friendId=substr($room,0,1);
        }
        $chatroom->lastMessage=Message::where('chat_room_id',$chatroom->id)->latest()->first();
        $chatroom->friend=User::find($friendId);
      }
     }
     return response()->json(['chatrooms'=>$chatrooms]);
   }
   public function messages(Request $request)
   {
     $chatroom=ChatRoom::where('room',$request->chatroom)->first();
     $messages=$chatroom->messages;
     return response()->json(['messages'=>$messages]);
   }
   public function sendMessage(Request $request)
   {
    $chatroom=ChatRoom::where('room',$request->chatroom)->first();
    if(!$chatroom){
      $chatroom=new ChatRoom();
      $chatroom->room=$request->chatroom;
      $chatroom->save();
    }
    $message=new Message();
    $message->chat_room_id=$chatroom->id;
    $message->from=auth()->user()->id;
    $message->to=$request->friendId;
    $message->body=$request->message;
    $message->save();
    broadcast(new NewMessage($request->message,$request->chatroom))->toOthers();
    return response()->json(['message'=>$message]);
   }
}
