<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntrepreneurshipProcess extends Model
{
    protected $table = 'entrepreneurship_processes';
    protected $fillable = ['title', 'description', 'image'];
}
