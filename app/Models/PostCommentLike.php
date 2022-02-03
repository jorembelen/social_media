<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCommentLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_comment_id',
    ];

    public function commentLikes()
    {
        return $this->hasManyThrough(PostComment::class, Post::class);
    }

}
