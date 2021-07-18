<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageCategory extends Model
{
    protected $table='imagecategory';
    protected $fillable =['id','image','title'];
    
    public function images() {
        return $this->belongsTo('App\Models\Gallery', 'category_id',  'id' );
    }
}