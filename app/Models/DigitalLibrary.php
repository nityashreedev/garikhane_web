<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DigitalLibrary extends Model
{
    protected $table='librarydigital';
    protected $fillable =['id','image','title','text','file','status'];
}