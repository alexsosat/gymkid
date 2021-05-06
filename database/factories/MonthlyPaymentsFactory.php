<?php

namespace Database\Factories;

use App\Models\MonthlyPayments;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonthlyPaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonthlyPayments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sub = $this->faker->randomDigit;
        $disc = $this->faker->randomFloat(2, 0, 1);
        $tot = $sub - ($sub * $disc);
        return [
            'subtotal' => $sub,
            'discount' => $disc,
            'payed_at' => $this->faker->date,
            'total' => $tot,
            'student_id' => rand(1, 25)
        ];
    }
}
