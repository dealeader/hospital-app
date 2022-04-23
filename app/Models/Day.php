<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Day extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function childs()
    {
        return $this->hasMany(Day::class, 'parent_id', 'id');
    }

    public static function parseDates($days) 
    {
        foreach($days as $day) {
            $day->date = Carbon::parse($day->date);
        }   
    }

}
