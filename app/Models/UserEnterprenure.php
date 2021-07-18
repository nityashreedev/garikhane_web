<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserEnterprenure extends Model
{
    protected $table='user_entreprenure';
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function entr()
    {
        return $this->hasOne('App\Models\Enterprenure', 'id', 'enterprenure_id');
    }
}
