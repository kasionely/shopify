<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends model
{
    use Notifiable;

    protected $fillable = [
      'name', 'email', 'password',
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];
}
