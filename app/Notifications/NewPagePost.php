<?php

namespace App\Notifications;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPagePost extends Notification
{
    use Queueable;
    public $user;
    
    public function __construct(User $user)
    {
       $this->user=$user;    
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
        'data'=>'notification'   
      ];
    }
}
?>