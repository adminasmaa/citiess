<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employee()
    {

        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function client()
    {

        return $this->belongsTo(Client::class, 'client_id');
    }
}
