<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MobileUser extends Model
{
    protected $table='mobile_user';
    protected $fillable = [
        'fname', 'lname' ,'email', 'password','provider','provider_id','address','phone'
    ];
    
   
}
