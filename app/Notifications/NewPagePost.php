<?php

namespace App\Notifications;
use App\Models\Post;
use App\Models\Page;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPagePost extends Notification
{
    use Queueable;
    public $page;
    public $post;
    
    public function __construct(Page $page,Post $post)
    {
       $this->page=$page; 
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
        'data'=>$this->page->name.' posted '.$this->post->title;   
      ];
    }
}
?>