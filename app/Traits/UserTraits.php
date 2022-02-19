<?php

namespace App\Traits;

use App\Models\Chat;
use App\Models\User;
use App\Models\UserConnection;
use App\Models\UserInfo;

trait UserTraits
{

    public function updateInfo($data)
    {
        $user = User::find(auth()->id());
        $userInfo = $user->userInfo()->UpdateOrCreate([
            'user_id' => $user->id], $data
        );
        $user->update($data);
    }

    public function updateProfile($data)
    {
        $user = User::find(auth()->id());
        $userInfo = $user->userInfo()->UpdateOrCreate([
            'user_id' => $user->id], $data
        );
        $user->update([
            'first_name' => $data['f_name'],
            'lasst_name' => $data['l_name'],
        ]);
    }

    public function addPost($data)
    {
        auth()->user()->posts()->create($data);
    }

    public function userIsVerified()
    {
        $user = UserInfo::whereuser_id(auth()->id())->first();
        if($user){
            if($user->city != null && $user->country != null){
                return true;
            }
        }
        return false;
    }

    // public function userFriendIds()
    // {
    //     $user = User::find($this->id);
    //    $friends = $user->userFriends();
    //     // $friends = UserConnection::whereuser_id($this->id)->pluck('friend_id', 'user_id');
    //     // $friends = UserConnection::whereuser_id($this->id)->orWhere('friend_id', $this->id)->get(['user_id', 'friend_id'])->toArray();
    //     if($friends) {
    //         return $friends;
    //     }
    //     return null;
    // }

    public function userIsOnlone()
    {
        $user = User::whereid($this->id)->where('last_seen' , '>', now()->subMinutes(5))->first();
        if($user){
            return true;
        }
    }

    public function unreadMessages()
    {
        $chat = Chat::wherefriend_id($this->id)->where('read_at', null)->pluck('id')->count();
        if($chat){
            return $chat;
        }
        return 0;
    }

    public function unreadUserMessages()
    {
        $chat = Chat::wherefriend_id($this->id)->where('read_at', null)->first();
        if($chat){
            return true;
        }
        return false;
    }

    public function pendingFriendRequest()
    {
        $pending = UserConnection::wherefriend_id($this->id)->wherestatus(0)->first();
        if($pending){
            return true;
        }
        return false;
    }

    public function userFriendsCount()
    {
        $friends = UserConnection::whereuser_id($this->id)->wherestatus(1)->pluck('id')->count();
        $user = User::find($this->id);
        $friends = $user->friendsOfMine()->wherePivot('status', 1)->get()->merge($user->friendOf()->wherePivot('status', 1)->get());
        if($friends){
            return $friends->count();
        }
        return 0;
    }

    public function userPendingFriendsCount()
    {
        $friends = UserConnection::wherefriend_id($this->id)->wherestatus(0)->pluck('id')->count();
        if($friends){
            return $friends;
        }
        return 0;
    }

    public function deleteFriend($friendId)
    {
        $friend = UserConnection::where(function($query) use ($friendId) {
            $query->where('user_id', auth()->id())->where('friend_id', $friendId);
        })->orWhere(function ($query) use ($friendId) {
            $query->where('user_id', $friendId)->where('friend_id', auth()->id());
        })->wherestatus(1)->first();
        if($friend){
            $friend->delete();
        }
    }

    public function avatar()
    {
        // $male = array(1,3,5,7,8,10,11,13,15,17);
        // $female = array(2,4,6,12,14);
        $info = UserInfo::whereuser_id($this->id)->first();
        if($info->gender == 'male') {
            // shuffle($male);
            // return $male[0];
            return 5;
        }else{
            // shuffle($female);
            // return $female[0];
            return 14;
        }
    }

}
