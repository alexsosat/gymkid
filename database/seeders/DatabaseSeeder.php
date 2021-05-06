<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Student, Schedule, Tutor, MonthlyPayments, Insurance, Enroll, City, Attendance};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schedule::factory(3)->create();
        Insurance::factory(7)->create();
        City::factory(10)->create();
        Tutor::factory(10)->create();
        Student::factory(25)->create();
        MonthlyPayments::factory(50)->create();
        Attendance::factory(100)->create();
        Enroll::factory(50)->create();
    }
}
