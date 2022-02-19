<?php

namespace App\Models;

use App\Traits\PostTraits;
use App\Traits\UserTraits;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, UserTraits, PostTraits;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'last_seen',
        'password',
    ];

    public $incrementing = false;
    protected $dates = ['last_seen'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullname()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->setId();
        });
        static::creating(function ($user){
            // produce a slug based on the activity title
            $slug = Str::slug($user->first_name);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("username RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $user->username = $count ? "{$slug}-{$count}" : $slug;
        });
    }

    public function setId()
    {
        $this->attributes['id'] = Str::uuid();
    }

    public function userInfo()
    {
        return $this->hasOne(UserInfo::class);
    }

    protected $with = ['sessions'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->hasOne(PostLike::class);
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function friends()
    {
        return $this->hasMany(UserConnection::class);
    }

    public function friendsOfMine()
    {
        return $this->belongsToMany(User::class, 'user_connections', 'user_id', 'friend_id');
    }

    public function friendOf()
    {
        return $this->belongsToMany(User::class, 'user_connections', 'friend_id', 'user_id');
    }

    public function userFriends()
    {
        return $this->friendsOfMine()->wherePivot('status', 1)->get()->merge($this->friendOf()->wherePivot('status', 1)->get());
    }

    public function userFriendIds()
    {
        return $this->friendsOfMine()->pluck('user_id', 'friend_id')->merge($this->friendOf()->pluck('user_id', 'friend_id'));
    }


}
