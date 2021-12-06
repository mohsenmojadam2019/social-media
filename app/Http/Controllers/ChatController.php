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
     return response()->json(['friends'=>$friends]);
   }
   public function messages(Request $request)
   {
     $chatroom=auth()->user()->id.$request->friendId;
     $messages=Message::where('chatroom_id',$chatroom)->latest()->get();
     return response()->json(['messages'=>$messages]);
   }
   public function sendMessage(Request $request)
   {
    broadcast(new NewMessage(auth()->user()->id,$request->message,$request->friendId))->toOthers();
    $message=new Message();
    $message->chatroom_id=auth()->user()->id.$request->friendId;
    $message->from=auth()->user()->id;
    $message->to=$request->friendId;
    $message->body=$request->message;
    $message->save();
    return response()->json(['message'=>$request->message]);
   }
}
