<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karmabhomi;

class AnnualOperationCost extends Model
{
    protected $fillable = ['karmabhomi_id', 'name', 'approx_price', 'approx_annual_sale','total_expense'];

    public function karmabhomi()
    {
        return $this->belongsTo(Karmabhomi::class, 'karmabhomi_id');

    }
}
