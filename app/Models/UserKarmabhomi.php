<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserKarmabhomi extends Model
{
    protected $table='user_karmabhomi';
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function karmabhomiuser()
    {
        return $this->hasOne('App\Models\Karmabhomi', 'id', 'karmabhomi_id');
    }
}