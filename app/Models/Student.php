<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;



    public function monthly_payments()
    {
        return $this->hasMany(MonthlyPayments::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function enrrollments()
    {
        return $this->hasMany(Enroll::class);
    }
}
