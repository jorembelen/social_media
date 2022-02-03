<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Location extends Component
{

    public $address, $city, $country;

    protected function rules()
    {
        return [
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
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
                'title' => 'Location was successfully updated.',
                'text' => '',
                ]);
            return redirect()->back();
        }else{
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function mount()
    {
        $user = User::find(auth()->id());
        $this->address = $user->userInfo->address ?? null;
        $this->city = $user->userInfo->city ?? null;
    }

    public function render()
    {
        return view('livewire.users.location')->extends('layouts.master');
    }
}
