<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class league extends Model
{
    use HasFactory;


    protected $fillable = [
        'key',
        'name',
        'simulator',
        'category',
        'max_racers',
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
