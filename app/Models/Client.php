<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function zone()
    {

        return $this->belongsTo(Zone::class, 'zone_id');
    }
    public function unit()
    {

        return $this->belongsTo(Unit::class, 'unit_id');
    }
    public function block()
    {

        return $this->belongsTo(Block::class, 'block_id');
    }
}
