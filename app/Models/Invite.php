<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $table='admin_invite';
    protected $fillable =['id','email','role'];

    public function user()
    {
        return $this->belongsTo('App\User', 'invited_by', 'id');
    }
}
