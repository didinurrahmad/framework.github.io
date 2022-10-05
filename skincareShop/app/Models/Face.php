<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Face extends Model
{
    use HasFactory;
    protected $table = 'faces';
    protected $fillable = ['id', 'merk', 'harga'];
}