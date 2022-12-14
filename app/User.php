<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name', 'lastname', 'email', 'gender', 'category_id'
    ];

    public $timestamps = false;

}
