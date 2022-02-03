<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Passwords extends Component
{
    public $old_password, $password, $password_confirmation;
    public $toggleOld = 'password';
    public $toggleNew = 'password';
    public $toggleCon = 'password';

    protected function rules()
    {
        return [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function showPasswordOld()
    {
        $this->toggleOld = 'text';
    }

    public function hidePasswordOld()
    {
        $this->toggleOld = 'password';
    }

    public function showPasswordNew()
    {
        $this->toggleNew = 'text';
    }

    public function hidePasswordNew()
    {
        $this->toggleNew = 'password';
    }

    public function showPasswordCon()
    {
        $this->toggleCon = 'text';
    }

    public function hidePasswordCon()
    {
        $this->toggleCon = 'password';
    }

    public function submit()
    {
        $user = User::find(auth()->id());
        $validatedData = $this->validate();
        if(Hash::check($this->old_password, $user->password)) {
            DB::beginTransaction();
            if($user->password){
                $validatedData['password'] = bcrypt($this->password);
                $user->updateInfo($validatedData);
                DB::commit();
                $this->dispatchBrowserEvent('swal:modal', [
                    'type' => 'success',
                    'title' => 'Password was successfully updated.',
                    'text' => '',
                    ]);
                return redirect()->route('settings');
            }else{
                DB::rollBack();
                return redirect()->back();
            }
        }else{
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'title' => 'Old password is incorrect.',
                'text' => '',
                ]);
        }
    }

    public function render()
    {
        return view('livewire.users.passwords')->extends('layouts.master');
    }
}
