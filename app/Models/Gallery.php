<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table='images';
    protected $fillable =['id','image','title'];
    
    
    public function imagecategory() {
        return $this->hasOne('App\Models\ImageCategory', 'id', 'category_id');
    }
}