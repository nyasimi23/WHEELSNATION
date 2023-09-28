<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarEvents extends Model
{
    use HasFactory;


    

    public function comments()
{
    return $this->morphMany(Comment::class, 'commentable');
}

    // Relationship to User
    public function user() {

    return $this->belongsTo(User::class, 'user_id');
}
}
