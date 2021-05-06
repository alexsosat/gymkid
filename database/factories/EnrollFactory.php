<?php

namespace Database\Factories;

use App\Models\Enroll;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class EnrollFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enroll::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $year = rand(2009, 2016);
        $month = rand(1, 12);
        $day = rand(1, 28);

        $date = Carbon::create($year, $month, $day, 0, 0, 0);


        return [
            'start_date' => $date->format('Y-m-d H:i:s'),
            'end_date' => $date->addDays(30),
            'student_id' => rand(1, 25),
            'schedule_id' => rand(1, 3),
            'insurance_id' => rand(1, 7),
            'tutor_id' => rand(1, 10)
        ];
    }
}
