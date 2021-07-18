<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karmabhomi;

class FixedCapital extends Model
{
    protected $fillable =['karmabhomi_id', 'fixed_property','approx_price', 'details', 'remarks'];

    public function karmabhomi()
    {
        return $this->belongsTo(Karmabhomi::class, 'karmabhomi_id');
    }

}
