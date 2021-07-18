<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karmabhomi;

class Machinery extends Model
{
    protected $fillable = ['karmabhomi_id', 'machine_name', 'total_expense', 'availability', 'remarks'];

    public function karmabhomi()
    {
        return $this->belongsTo(Karmabhomi::class, 'karmabhomi_id');
    }
}
