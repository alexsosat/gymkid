<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    public function enrollments()
    {
        return $this->hasMany(Enroll::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
