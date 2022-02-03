<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'status',
    ];

    public function notificationSettings($name, $status)
    {
        Notification::UpdateOrCreate(
            [
            'name' => $name,
            ],
            [
                'user_id' => auth()->id(),
                'name' => $name,
                'status' => $status
            ]);
    }

}
