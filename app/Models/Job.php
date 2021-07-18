<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table='job';
    protected $fillable =['id','image','title','description','salary','vacancy','date','meta_title','meta_description','location','bgimage'];
}
