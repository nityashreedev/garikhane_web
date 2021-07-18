<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enterprenure extends Model
{
    protected $table='enterprenure';
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
     public function entr()
    {
        return $this->hasOne('App\Models\UserEnterprenure', 'enterprenure_id', 'id');
    }
}
