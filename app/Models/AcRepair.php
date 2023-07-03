<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcRepair extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function employee()
    {

        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
