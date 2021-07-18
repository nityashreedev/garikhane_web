<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table='setting';
    protected $fillable =['id','title','image','description','caption','phone','gmail','bgimage','facebook','twitter','instagram','meta_title','meta_description','address'];
}
