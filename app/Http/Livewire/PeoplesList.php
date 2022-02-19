<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class PeoplesList extends Component
{
    public $amount = 3;

    public function render()
    {
        $friendList = auth()->user()->userFriendIds();
        // dd($friendList);
        $totalUsers = User::where('id', '!=', auth()->id())
            ->whereNotIn('id',$friendList)
            ->pluck('id')
            ->count();
        $users = User::where('id', '!=', auth()->id())
            ->whereNotIn('id',$friendList)
            ->latest()
            ->take($this->amount)
            ->get();

        return view('livewire.peoples-list', compact('users', 'totalUsers'))->extends('layouts.master');
    }

    public function addFriend($friendID)
    {
       auth()->user()->friends()->create(
          [ 'friend_id' => $friendID]
       );
       session()->flash('message', 'Friend request was successfully sent and waiting for approval.');
       return redirect()->route('peoples.list');
    }

    public function load()
    {
        $this->amount += 3;
    }

}
