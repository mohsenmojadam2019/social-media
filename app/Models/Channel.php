<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    public function users()
    {
      return $this->belongsToMany(User::class);
    }
    public function posts()
    {
      return $this->hasMany(Post::class);
    }
}
