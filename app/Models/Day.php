<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = [
        'date',
    ];

    protected $casts = [
        'isFree' => 'boolean',
    ];

    public function childs()
    {
        return $this->hasMany(Day::class, 'parent_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
}
