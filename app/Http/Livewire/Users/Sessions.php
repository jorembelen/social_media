<?php

namespace App\Http\Livewire\Users;

use App\Models\Session;
use Livewire\Component;

class Sessions extends Component
{

    public function clear()
    {
        $sessions = Session::with('user')
        ->whereuser_id(auth()->id())
        ->get();
        foreach($sessions as $session){
            $session->delete();
            session()->flash('message', 'Session was cleared, You will be logged out.');
        }

    }

    public function delete($sessionId)
    {
        $session = Session::find($sessionId);
        $session->delete();
        if(auth()->user()->sessions->count() > 0){
            session()->flash('message', 'Session was deleted.');
        }else{
            session()->flash('message', 'Session was cleared, You will be logged out.');
        }
    }

    public function render()
    {
        $sessions = Session::with('user')
            ->whereuser_id(auth()->id())
            ->get();

        return view('livewire.users.sessions', compact('sessions'))->extends('layouts.master');
    }
}
