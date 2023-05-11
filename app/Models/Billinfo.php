<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billinfo extends Model
{
    use HasFactory;
    
    public function bills()
    {
        return $this->belongsToMany(Bill::class);
    }
}
