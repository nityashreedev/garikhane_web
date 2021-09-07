<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RunningProject extends Model
{
    protected $table = 'running_projects';
    protected $fillable = [
        'loan_type',
        'project_name', 
        'project_type', 
        'project_amount', 
        'loan_amount', 
        'location', 
        'loan_date',
        'loan_taken_by',
    ];
    
}