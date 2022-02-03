<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        return view('livewire.users.notifications')->extends('layouts.master');
    }
}
