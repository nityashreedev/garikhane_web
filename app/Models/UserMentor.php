<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMentor extends Model
{
    protected $table='user_mentor';
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
