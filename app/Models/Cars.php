<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = ['make','model','price','year'];

    public static function search($searchTerm)
    {
        return static::where(function ($query) use ($searchTerm) {
            $query->where('make', 'like', "%$searchTerm%")
                ->orWhere('model', 'like', "%$searchTerm%");
        });
    }


    public function comments()
{
    return $this->morphMany(Comment::class, 'commentable');
}

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
