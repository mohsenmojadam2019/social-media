<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('post.{id}',function($user){
  return $user;
});

Broadcast::channel('comment.{id}',function($user){
  return $user;
});

Broadcast::channel('chat',function($user){
  return $user;
});

Broadcast::channel('chat.{id}.{fid}',function($user,$id,$fid){
  return $user->id==$id||$user->id==$fid;
});