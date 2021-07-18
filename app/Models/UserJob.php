<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $table='job_user';
     public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
     public function mobileuser()
    {
        return $this->hasOne('App\Models\MobileUser', 'id', 'user_id');
    }
}