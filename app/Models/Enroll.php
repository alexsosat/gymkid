<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function parent()
    {
        return $this->belongsTo(Parent::class);
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
