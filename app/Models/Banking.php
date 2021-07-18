<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banking extends Model
{
    protected $table='banking';
    protected $fillable =['id','image','title','description','location','meta_title','date','meta_description','bgimage','date'];
}
