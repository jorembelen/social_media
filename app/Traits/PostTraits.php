<?php

namespace App\Traits;

use App\Models\PostComment;
use App\Models\PostCommentLike;
use App\Models\PostLike;

trait PostTraits
{

    public function postLikesCount()
    {
        return PostLike::wherepost_id($this->id)->pluck('id')->count();
    }

    public function postCommentsCount()
    {
        return PostComment::wherepost_id($this->id)->pluck('id')->count();
    }

    public function postCommentLikesCount()
    {
        return PostCommentLike::wherepost_comment_id($this->id)->pluck('id')->count();
    }

    public function userLikePost()
    {
        $like = PostLike::whereuser_id(auth()->id())
            ->wherepost_id($this->id)
            ->first();
        if($like){
            return true;
        }
    }

    public function userLikePostComment()
    {
        $like = PostCommentLike::whereuser_id(auth()->id())
            ->wherepost_comment_id($this->id)
            ->first();
        if($like){
            return true;
        }
    }


}
