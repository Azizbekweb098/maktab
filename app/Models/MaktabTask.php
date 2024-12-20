<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaktabTask extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'lastname', 'image'];
}
