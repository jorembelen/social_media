<?php

namespace App\Http\Livewire\Users;

use App\Models\UserConnection;
use Livewire\Component;

class Messages extends Component
{
    public $userId, $chatView, $friendId, $message;

    public function mount($id)
    {
        $this->userId = $id;
    }

    public function render()
    {
        $friends = UserConnection::whereuser_id(auth()->id())->latest()->get();
        // dd($friends);
        return view('livewire.users.messages', compact('friends'))->extends('layouts.master');
    }

    public function chat($friendId)
    {
        $this->chatView = true;
        $this->friendId = $friendId;
    }

    public function send($friendId)
    {
        auth()->user()->chats()->create([
            'friend_id' => $friendId,
            'content' => $this->message,
        ]);
        $this->message = '';
    }

}
