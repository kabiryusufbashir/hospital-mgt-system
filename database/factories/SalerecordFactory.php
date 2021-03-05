<?php

namespace Database\Factories;

use App\Models\Salerecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalerecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salerecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $amount = $this->faker->numberBetween($min = 100, $max = 999999);
        $quantity = $this->faker->numberBetween($min = 1, $max = 20);
        $discount = 0.5;
        $grossTotal = 0.5/100 * ($amount * $quantity);

        return [
            'patient_id' => $this->faker->numberBetween($min = 2, $max = 443),
            'user_id' => 10,
            'amount' => $amount,
            'quantity' => $quantity,
            'discount' => $discount,
            'grossTotal' => $grossTotal,
            'serviceType' => $this->faker->randomElement($array = array ('Drug','Consulatation Fee')),
            'paymentMethod' => $this->faker->randomElement($array = array ('Cash','Transfer')),
            'paymentStatus' => $this->faker->randomElement($array = array ('Paid','Pending')),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-1 months', $endDate = 'now', $timezone = null),
        ];
    }
}
