<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonData extends Model
{

    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function PestData(){
        return $this->hasMany(PestData::class);
    }
}
