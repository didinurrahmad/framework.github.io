<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Face extends Model
{
    public function Customer() {
    return $this->hasMany(Customer::class);
    }
    use HasFactory;
    // protected $table = 'faces';
    // protected $fillable = ['id', 'merk', 'harga', 'merk_id'];
}
