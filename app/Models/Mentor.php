<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table='mentor';
     public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
     public function mentor()
    {
        return $this->hasOne('App\Models\UserMentor', 'mentor_id', 'id');
    }
}
