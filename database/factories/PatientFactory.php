<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 2, $max = 676),
            'fileNo' => Str::random(10),
            'title' => $this->faker->title,
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement($array = array ('Male','Female')),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'phone' => $this->faker->e164PhoneNumber,
            'address' => $this->faker->address,
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
