<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GariKhanneProject extends Model
{
    protected $table='gari_khanne_projects';
    protected $fillable =['id','title','description','image','details','meta_title','meta_description'];
}
