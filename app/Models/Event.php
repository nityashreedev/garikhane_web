<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{   protected $table='events';
    protected $fillable =['id','image','title','description','location','meta_title','date','meta_description','bgimage','price'];
}
