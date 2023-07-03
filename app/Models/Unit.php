<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }// end of get name

    public function zone()
    {

        return $this->belongsTo(Zone::class, 'zone_id');
    }    public function block()
    {

        return $this->belongsTo(Block::class, 'block_id');
    }
}
