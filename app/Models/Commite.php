<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commite extends Model
{
    protected $table='comitee_member';
    protected $fillable =['id','name','image','position'];
}
