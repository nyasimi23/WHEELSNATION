<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarEvents extends Model
{
    use HasFactory;




    // Relationship to User
    public function user() {

    return $this->belongsTo(User::class, 'user_id');
}
}
