<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    protected $table='event_user';
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
