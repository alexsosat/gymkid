<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPayments extends Model
{
    use HasFactory;

    protected $table = 'monthly_payments';

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
