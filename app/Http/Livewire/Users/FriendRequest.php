<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use App\Models\UserConnection;
use Livewire\Component;

class FriendRequest extends Component
{
    public function render()
    {
        $connections = UserConnection::wherefriend_id(auth()->id())->wherestatus(0)->latest()->get();

        return view('livewire.users.friend-request', compact('connections'))->extends('layouts.master');
    }

    public function remove($friendId)
    {
        $connection = UserConnection::wherefriend_id(auth()->id())
        ->whereuser_id($friendId)
        ->wherestatus(0)
        ->first();
        $user = User::find($friendId);

        $connection->delete();
        session()->flash('message', 'You removed ' .$user->getFullName() . ' on your pending request.');
        return redirect()->back();
    }

    public function accept($friendId)
    {
        $connection = UserConnection::wherefriend_id(auth()->id())
        ->whereuser_id($friendId)
        ->wherestatus(0)
        ->first();
        $user = User::find($friendId);

        $connection->update(['status' => 1]);
        session()->flash('message', 'You are now friends with ' .$user->getFullName());
    }

}
