<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitStatus extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function zone()
    {

        return $this->belongsTo(Zone::class, 'zone_id');
    }
    public function block()
    {

        return $this->belongsTo(Block::class, 'block_id');
    }
}
