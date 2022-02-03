<?php

namespace App\Traits;

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

    public function userFriendIds()
    {
       $friends = UserConnection::whereuser_id($this->id)->pluck('friend_id');
       if($friends) {
           return $friends;
       }
       return false;
    }

}
