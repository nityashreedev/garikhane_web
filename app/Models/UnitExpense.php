<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitExpense extends Model
{
    protected $fillable = ['karmabhomi_id', 'name', 'approx_price', 'approx_annual_production', 'total_expense'];
}
