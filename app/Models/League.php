<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class league extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'category'
    ];
}
