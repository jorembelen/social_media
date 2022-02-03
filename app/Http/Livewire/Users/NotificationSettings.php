<?php

namespace App\Http\Livewire\Users;

use App\Models\Notification;
use Livewire\Component;

class NotificationSettings extends Component
{
    public $like_posts, $commented_posts, $shared_posts, $followed_me, $liked_pages, $visited_profile, $mentions, $joins, $accepted, $birthdays;
    protected $listeners = ['refreshNotification' => '$refresh'];

    public function mount()
    {
        $notifications = Notification::whereuser_id(auth()->id())->get();
        if($notifications->count() > 0){
            foreach($notifications as $notification){
                if($notification->name == 'like_posts'){
                    $this->like_posts = $notification->status;
                 }elseif($notification->name == 'commented_posts'){
                    $this->commented_posts = $notification->status;
                 }elseif($notification->name == 'shared_posts'){
                    $this->shared_posts = $notification->status;
                 }elseif($notification->name == 'followed_me'){
                    $this->followed_me = $notification->status;
                 }elseif($notification->name == 'liked_pages'){
                    $this->liked_pages = $notification->status;
                 }elseif($notification->name == 'visited_profile'){
                    $this->visited_profile = $notification->status;
                 }elseif($notification->name == 'mentions'){
                    $this->mentions = $notification->status;
                 }elseif($notification->name == 'joins'){
                    $this->joins = $notification->status;
                 }elseif($notification->name == 'accepted'){
                    $this->accepted = $notification->status;
                 }elseif($notification->name == 'birthdays'){
                    $this->birthdays = $notification->status;
                 }
            }
        }else{
            $this->like_posts = 0;
            $this->commented_posts = 0;
            $this->shared_posts = 0;
            $this->followed_me = 0;
            $this->liked_pages = 0;
            $this->visited_profile = 0;
            $this->mentions = 0;
            $this->joins = 0;
            $this->accepted = 0;
            $this->birthdays = 0;
        }
    }

    public function likePost()
    {
        $status = $this->like_posts == 1 ? 0 : 1;
        $name = 'like_posts';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->like_posts == 0 ? 'Someone like my posts notification was enabled.' : 'Someone like my posts notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function commentedPost()
    {
        $status = $this->commented_posts == 1 ? 0 : 1;
        $name = 'commented_posts';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

            $message = $this->commented_posts == 0 ? 'Someone commented my posts notification was enabled.' : 'Someone commented my posts notification was disabled.';
            session()->flash('message', $message);
            return redirect()->route('settings.notification');
    }

    public function sharedPost()
    {
        $status = $this->shared_posts == 1 ? 0 : 1;
        $name = 'shared_posts';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);
        $message = $this->shared_posts == 0 ? 'Someone shared my posts notification was enabled.' : 'Someone shared my posts notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function followedMe()
    {
        $status = $this->followed_me == 1 ? 0 : 1;
        $name = 'followed_me';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->followed_me == 0 ? 'Someone followed me notification was enabled.' : 'Someone followed me notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function likedPages()
    {
        $status = $this->liked_pages == 1 ? 0 : 1;
        $name = 'liked_pages';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->liked_pages == 0 ? 'Someone liked my pages notification was enabled.' : 'Someone liked my pages notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function visitedProfile()
    {
        $status = $this->visited_profile == 1 ? 0 : 1;
        $name = 'visited_profile';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->visited_profile == 0 ? 'Someone visited my profile notification was enabled.' : 'Someone visited my profile notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function mentions()
    {
        $status = $this->mentions == 1 ? 0 : 1;
        $name = 'mentions';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->mentions == 0 ? 'Someone mentions or tags notification was enabled.' : 'Someone mentions or tags notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }
    public function joins()
    {
        $status = $this->joins == 1 ? 0 : 1;
        $name = 'joins';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->joins == 0 ? 'Someone joined my group notification was enabled.' : 'Someone joined my group notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function accepted()
    {
        $status = $this->accepted == 1 ? 0 : 1;
        $name = 'accepted';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->accepted == 0 ? 'Someone accepted my request notification was enabled.' : 'Someone accepted my request notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function birthdays()
    {
        $status = $this->birthdays == 1 ? 0 : 1;
        $name = 'birthdays';
        $notification = new Notification;
        $notification->notificationSettings($name, $status);

        $message = $this->birthdays == 0 ? 'Birthdays notification was enabled.' : 'Birthdays notification was disabled.';
        session()->flash('message', $message);
        return redirect()->route('settings.notification');
    }

    public function render()
    {
        return view('livewire.users.notification-settings')->extends('layouts.master');
    }
}
