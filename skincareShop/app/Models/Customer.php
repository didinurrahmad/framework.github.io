<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function Face() {
        return $this->belongsTo(Face::class);
        }
    use HasFactory;
}
