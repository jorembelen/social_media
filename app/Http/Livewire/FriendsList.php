<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FriendsList extends Component
{
    public function render()
    {
        $friends = auth()->user()->userFriends();

        return view('livewire.friends-list', compact('friends'))->extends('layouts.master');
    }

    public function delete($friendId)
    {
        $user = User::find($friendId);
        auth()->user()->deleteFriend($friendId);
        session()->flash('message', $user->getFullName() .' was successfully removed in your friend list.');
    }

}
