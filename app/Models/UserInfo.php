<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'username',
        'birth_date',
        'phone',
        'gender',
        'status',
        'website',
        'about',
        'country',
        'address',
        'city',
        'postal',
    ];

}
