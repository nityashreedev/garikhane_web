<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\YearlyProduction;
use App\Models\Machinery;
use App\Models\FixedCapital;
use App\Models\RunningCapital;
use App\Models\UnitExpense;
use App\Models\UnitIncome;
use App\Models\Pradesh;
use App\Models\District;
use App\Models\User;
use App\Models\Municipality;
use App\Models\AnnualOperationCost;

class Karmabhomi extends Model
{
    protected $table='karmabhomi';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
     public function karmabhomiuser()
    {
        return $this->hasOne('App\Models\UserKarmabhomi', 'karmabhomi_id', 'id');
    }

    public function yearlyProduction()
    {
        return $this->hasMany(YearlyProduction::class, 'karmabhomi_id');
    }

    public function machinery()
    {
        return $this->hasMany(Machinery::class);
    }

    public function fixedCapital()
    {
        return $this->hasMany(FixedCapital::class);
    }

    public function runningCapital()
    {
        return $this->hasMany(RunningCapital::class);
    }

    public function unitExpense()
    {
        return $this->hasMany(UnitExpense::class);
    }

    public function unitIncome()
    {
        return $this->hasMany(UnitIncome::class);
    }

    public function annualOperationCost()
    {
        return $this->hasMany(AnnualOperationCost::class);
    }

    public function getPradesh()
    {
        return $this->belongsTo(Pradesh::class, 'pradesh');
    }

    public function getDistrict()
    {
        return $this->belongsTo(District::class, 'district');
    }
    public function getMunicipality()
    {
        return $this->belongsTo(Municipality::class, 'vdc');
    }

    public function getBusinessPradesh()
    {
        return $this->belongsTo(Pradesh::class, 'business_pradesh');
    }

    public function getBusinessDistrict()
    {
        return $this->belongsTo(District::class, 'business_district');
    }
    public function getBusinessMunicipality()
    {
        return $this->belongsTo(Municipality::class, 'business_vdc');
    }

}