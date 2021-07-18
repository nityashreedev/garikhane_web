<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitIncome extends Model
{
    protected $fillable = ['karmabhomi_id', 'name', 'approx_price', 'approx_annual_sale', 'total_expense'];

}
