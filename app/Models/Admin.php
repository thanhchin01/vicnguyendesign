<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';
    protected $fillable = [
        'username',
        'fullname',
        'email',
        'password',
        'phone',
        'avatar',
        'gender',
        'date_of_birth'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
