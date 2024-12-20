<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muthasiz extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'lastname', 'image', 'ishi'];
}
