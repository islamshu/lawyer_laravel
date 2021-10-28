<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Lawyer extends Authenticatable
{
      
    protected $guarded =[];

    protected $hidden = [
        'password', 'remember_token',
    ];

 
}
