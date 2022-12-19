<?php

namespace App\Notifications;
use App\Models\User;
use App\Models\Group;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewGroupPost extends Notification
{
    use Queueable;
    public $group;
    public $user;
    public $post;

    public function __construct(Group $group,User $user,Post $post)
    {
       $this->group=$group;
       $this->post=$user;
       $this->post=$post;
    }
    public function via($notifiable)
    {
      return ['database','mail'];
    }
    public function toMail($notifiable)
    {
      return (new MailMessage())->view('welcome',['user'=>$this->user]);
    }
    public function toArray($notifiable)
    {
      return [
        'data'=>$this->user->name.'to group '.$this->group->name.' posted '.$this->post->title
      ];
    }
}
?>
