<?php

namespace App\Http\Livewire\Users;

use App\Models\Chat;
use App\Models\UserConnection;
use Livewire\Component;

class Messages extends Component
{
    public $userId, $chatView, $friendId, $message;
    protected $listeners = ['clear'];

    public function mount($id)
    {
        $this->userId = $id;
        $chat = Chat::where(function($query)  {
            $query->where('user_id', auth()->id());
        })->orWhere(function ($query)  {
            $query->where('friend_id', auth()->id());
        })->latest()->first();
        if($chat){
            if($chat->user_id == auth()->id()){
                $friendId = $chat->friend_id;
            }else{
                $friendId = $chat->user_id;
            }
            if($chat){
                $this->chatView = true;
                $this->friendId = $friendId;
            }
        }
    }

    public function render()
    {
        $friends = auth()->user()->userFriends();

        return view('livewire.users.messages', compact('friends'))->extends('layouts.master');
    }

    public function chat($friendId)
    {
        $this->chatView = true;
        $this->friendId = $friendId;
        Chat::wherefriend_id(auth()->id())->where('read_at', null)->update(['read_at' => now()]);
        $this->emit('refreshNavBar');
    }

    public function send($friendId)
    {
        Chat::wherefriend_id(auth()->id())->where('read_at', null)->update(['read_at' => now()]);
        auth()->user()->chats()->create([
            'friend_id' => $friendId,
            'content' => $this->message,
        ]);
        $this->message = '';
        $this->emit('refreshNavBar');
    }

    public function confirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'text' => 'Are you sure? If deleted, you will not be able to recover this messages!',
            'id' => $id
            ]);
    }

    public function clear($friendId)
    {
        $chats = Chat::where(function($query) use ($friendId) {
            $query->where('user_id', auth()->id())->where('friend_id', $friendId);
        })->orWhere(function ($query) use ($friendId) {
            $query->where('user_id', $friendId)->where('friend_id', auth()->id());
        })->get();
        foreach($chats as $chat){
            $chat->delete();
        }
        session()->flash('message', 'Messages was cleared successfully.');
    }
}
