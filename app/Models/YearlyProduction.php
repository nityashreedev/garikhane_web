<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YearlyProduction extends Model
{
    protected $fillable = ['karmabhomi_id','product', 'qty', 'price', 'remarks'];

}
