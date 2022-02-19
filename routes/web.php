<?php

use App\Http\Livewire\FriendsList;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PeoplesList;
use App\Http\Livewire\Users\Address;
use App\Http\Livewire\Users\Connections;
use App\Http\Livewire\Users\FriendRequest;
use App\Http\Livewire\Users\FriendSent;
use App\Http\Livewire\Users\Location;
use App\Http\Livewire\Users\Messages;
use App\Http\Livewire\Users\Notifications;
use App\Http\Livewire\Users\NotificationSettings;
use App\Http\Livewire\Users\Passwords;
use App\Http\Livewire\Users\Privacy;
use App\Http\Livewire\Users\Profile;
use App\Http\Livewire\Users\Sessions;
use App\Http\Livewire\Users\Settings;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', HomeComponent::class)->name('home');
    Route::get('/user-profile', Profile::class)->name('profile');
    Route::get('/settings', Settings::class)->name('settings');
    Route::get('/address', Address::class)->name('address');
    Route::get('/passwords', Passwords::class)->name('passwords');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/location', Location::class)->name('location');
    Route::get('/privacy', Privacy::class)->name('privacy');
    Route::get('/sessions', Sessions::class)->name('sessions');
    Route::get('/connections', Connections::class)->name('connections');
    Route::get('/friends-request', FriendRequest::class)->name('friends.request');
    Route::get('/friends-sent', FriendSent::class)->name('friends.sent');
    Route::get('/friends-list', FriendsList::class)->name('friends.list');
    Route::get('/peoples-list', PeoplesList::class)->name('peoples.list');
    Route::get('/messages/{id}', Messages::class)->name('messages');
    Route::get('/notification-settings', NotificationSettings::class)->name('settings.notification');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
