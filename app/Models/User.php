<?php

namespace App\Models;

use App\Events\NewUserRegisterEvent;
use App\Models\Karmabhomi;
use App\Models\MobileUserAuth;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $fillable =['id','fname','lname','email','password','role', 'address', 'phone'];

    protected $dispatchesEvents = [
        'created' => NewUserRegisterEvent::class,
    ];

    public function authToken()
    {
        return $this->hasOne(MobileUserAuth::class);
    }

    public function karmabhomi()
    {
        return $this->hasMany(Karmabhomi::class, 'user_id');
    }
}
