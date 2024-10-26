<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class league extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'simulator_id', 'category_id', 'max_racers',
        'creator_user_id', 'description', 'key', 'start_date', 'end_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
{
    return $this->belongsToMany(Category::class, 'category_league');
}

}
