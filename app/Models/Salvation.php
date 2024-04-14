<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salvation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone'];
    protected $table = 'salvations';
}
