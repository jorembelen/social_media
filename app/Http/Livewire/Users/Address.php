<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Address extends Component
{
    public $country, $address, $city, $postal, $userID;

    protected function rules()
    {
        return [
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal' => 'required',
        ];
    }

    public function submit(User $user)
    {
        $validatedData = $this->validate();
        DB::beginTransaction();
        if($user){
            $user->updateProfile($validatedData);
            DB::commit();
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Address was successfully updated.',
                'text' => '',
                ]);
            return redirect()->route('settings');
        }else{
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function mount()
    {
        $user = User::find(auth()->id());
        $this->country = $user->country;
        $this->address = $user->address;
        $this->city = $user->city;
        $this->postal = $user->postal;
        $this->userID = $user->id;
    }

    public function render()
    {
        return view('livewire.users.address')->extends('layouts.master');
    }
}
