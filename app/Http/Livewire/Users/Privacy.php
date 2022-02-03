<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class Privacy extends Component
{
    public function render()
    {
        return view('livewire.users.privacy')->extends('layouts.master');
    }
}
