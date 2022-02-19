<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavbarComponent extends Component
{
    protected $listeners = ['refreshNavBar' => '$refresh'];

    public function render()
    {
        return view('livewire.navbar-component');
    }
}
