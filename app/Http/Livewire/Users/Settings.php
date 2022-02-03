<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Settings extends Component
{
    public $email, $username, $userID;

    public function mount()
    {
        $user = User::find(auth()->id());
        $this->email = $user->email;
        $this->userID = $user->id;
        $this->username = $user->username;
    }

    protected function rules()
    {
        return [
            'email' => 'required|email|unique:users,email,'. $this->userID,
            'username' => 'required|unique:users,username,'. $this->userID,
        ];
    }

    public function submit(User $user)
    {
        $validatedData = $this->validate();
        DB::beginTransaction();
        if($user){
            $user->updateInfo($validatedData);
            DB::commit();
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Data was successfully updated.',
                'text' => '',
                ]);
        }else{
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.users.settings')->extends('layouts.master');
    }
}
