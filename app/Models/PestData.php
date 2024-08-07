<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PestData extends Model
{
    use HasFactory;
    public function CommonData(){
        return $this->belongsTo(CommonData::class);
    }
}
