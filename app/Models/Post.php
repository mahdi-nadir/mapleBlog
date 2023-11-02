<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function imgPost()
    {
        return $this->belongsTo(ImgPost::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function likedByUsers()
    // {
    //     return $this->belongsToMany(User::class, 'post_likes', 'post_id', 'user_id')
    //         ->where('is_like', true);
    // }
}
