<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterComponent extends Component
{
    public $toggle = 'password';
    public $toggle2 = 'password';
    public $password, $password_confirmation;

    public function showPassword()
    {
        $this->toggle = 'text';
    }

    public function hidePassword()
    {
        $this->toggle = 'password';
    }

    public function showPassword2()
    {
        $this->toggle2 = 'text';
    }

    public function hidePassword2()
    {
        $this->toggle2 = 'password';
    }

    public function render()
    {
        return view('livewire.register-component');
    }
}
