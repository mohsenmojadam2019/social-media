<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\NewMessage;
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
   public function sendMessage(Request $request)
   {
    broadcast(new NewMessage(auth()->user(),$request->message,auth()->user()))->toOthers();
    return response()->json(['message'=>$request->message]);
   }
}
