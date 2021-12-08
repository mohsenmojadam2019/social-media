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
  return true;
});

Broadcast::channel('comment.{id}',function($user){
  return true;
});

Broadcast::channel('chatter',function($user){
  return $user;
});