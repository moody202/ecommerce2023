<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function states(){
        return $this->belongsTo(State::class,'state_id');
    }
}
