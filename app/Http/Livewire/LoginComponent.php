<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{
    public $toggle = 'password';
    public $password;

    public function showPassword()
    {
        $this->toggle = 'text';
    }

    public function hidePassword()
    {
        $this->toggle = 'password';
    }

    public function render()
    {
        return view('livewire.login-component');
    }
}
