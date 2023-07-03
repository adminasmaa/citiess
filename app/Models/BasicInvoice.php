<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInvoice extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client()
    {

        return $this->belongsTo(Client::class, 'client_id');
    }
    public function unit()
    {

        return $this->belongsTo(Unit::class, 'unit_id');
    }

}
