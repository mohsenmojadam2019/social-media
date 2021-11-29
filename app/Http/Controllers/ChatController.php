<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Events\NewComment;
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
   public function sendMessage(Request $request)
   {
    broadcast(new NewMessage(auth()->user(),$request->message,$request->friend))->toOthers();
    return response()->json(['message'=>$request->message]);
   }
}
