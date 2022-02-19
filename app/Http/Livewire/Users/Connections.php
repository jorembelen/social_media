<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use App\Models\UserConnection;
use Livewire\Component;

class Connections extends Component
{
    public function render()
    {
        $connections = UserConnection::wherefriend_id(auth()->id())->wherestatus(0)->take(5)->latest()->get();
        // $friendList = auth()->user()->userFriendIds();
        // dd($friendList);
        $people = User::where('id', '!=', auth()->id())->inRandomOrder()->take(5)->get();

        return view('livewire.users.connections', compact('connections', 'people'))->extends('layouts.master');
    }

    public function accept($friendId)
    {
        // $connection = new UserConnection();
        $friend = UserConnection::whereuser_id($friendId)
        ->wherefriend_id(auth()->id())
        ->wherestatus(0)
        ->first();
        $user = User::find($friendId);

        $friend->update(['status' => 1]);
        // $connection->create([
        //     'user_id' => auth()->id(),
        //     'friend_id' => $friendId,
        //     'status' => 1
        // ]);
        session()->flash('message', 'You are now friends with ' .$user->getFullName());
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

    public function addFriend($friendID)
    {
       auth()->user()->friends()->create(
          [ 'friend_id' => $friendID]
       );
       session()->flash('message', 'Friend request was successfully sent and waiting for approval.');
    }

}
