<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MobileUserAuth extends Model
{
    protected $table='mobile_user_auth_tokens';
    protected $fillable = [
        'id', 'user_id' ,'auth_token', 'is_active','expired_at','fcm_token','device_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
