<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employee()
    {

        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function section()
    {

        return $this->belongsTo(Section::class, 'section_id');
    }
}
