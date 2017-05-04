<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'username', 'password', 'firstname', 'lastname',
         'tel', 'birthday', 'gender', 'address', 'email', 'role'
    ];

    protected $visible = [
        'user_id', 'username', 'firstname', 'lastname',
         'tel', 'birthday', 'gender', 'address', 'email', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
