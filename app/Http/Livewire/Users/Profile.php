<?php

namespace App\Http\Livewire\Users;

use App\Models\Notification;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Profile extends Component
{
    public $f_name, $l_name, $gender, $phone, $website, $status, $about, $birth_date, $phone_visibilty;

    protected function rules()
    {
        return [
            'f_name' => 'required',
            'l_name' => 'required',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'gender' => 'nullable',
            'country' => 'nullable',
            'birth_date' => 'nullable',
            'status' => 'nullable',
            'about' => 'nullable',
            'website' => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
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
                'title' => 'Profile was successfully updated.',
                'text' => '',
                ]);
            return redirect()->back();
        }else{
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function phoneStatus()
    {
        $status = $this->phone_visibilty == 1 ? 0 : 1;
        $name = 'phone_visibilty';
        $notification = new Notification();
        $notification->notificationSettings($name, $status);

        $message = $this->phone_visibilty == 0 ? 'Phone visibilty to members was enabled.' : 'Phone visibilty to members was disabled.';
        session()->flash('message', $message);
        return redirect()->route('profile');
    }

    public function mount()
    {
        $user = User::find(auth()->id());
        $this->f_name = $user->first_name;
        $this->l_name = $user->last_name;
        $this->phone = $user->userInfo->phone ?? null;
        $this->country = $user->userInfo->country ?? null;
        $this->gender = $user->userInfo->gender ?? null;
        $this->status = $user->userInfo->status ?? null;
        $this->website = $user->userInfo->website ?? null;
        $this->about = $user->userInfo->about ?? null;
        $this->birth_date = $user->userInfo->birth_date ?? null;

        $notifications = Notification::whereuser_id(auth()->id())->get();
        if($notifications->count() > 0){
            foreach($notifications as $notification){
                if($notification->name == 'phone_visibilty'){
                    $this->phone_visibilty = $notification->status;
                 }
            }
        }else{
            $this->phone_visibilty = 0;
        }
    }

    public function render()
    {
        return view('livewire.users.profile')->extends('layouts.master');
    }
}
