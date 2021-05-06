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

    public function insurance()
    {

        $enrollments = $this->enrrollments();
        dd($enrollments);
        $obj = [];
        foreach ($enrollments as $enrollment) {
            dd($enrollment);
            array_push($obj, $enrollment);
        }

        dd($obj);

        $current_enroll = max(array_column($enrollments->getResults(), 'start_date'));

        return $current_enroll->insurance();
    }
}
