<?php

namespace Database\Factories;

use App\Models\Bio;
use Illuminate\Database\Eloquent\Factories\Factory;

class BioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 2, $max = 363),
            'title' => $this->faker->title,
            'name' => $this->faker->name,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'gender' => $this->faker->randomElement($array = array ('Male','Female')),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'phone' => $this->faker->e164PhoneNumber,
            'address' => $this->faker->address,
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
