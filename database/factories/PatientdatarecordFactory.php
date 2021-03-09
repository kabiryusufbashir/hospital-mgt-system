<?php

namespace Database\Factories;

use App\Models\Patientdatarecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientdatarecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patientdatarecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_id' => $this->faker->numberBetween($min = 101, $max = 602),
            'weight' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'height' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'temperature' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'bp' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'complaints' => $this->faker->paragraph,
            'prescription' => $this->faker->sentence,
            'doctorId' => $this->faker->numberBetween($min = 2, $max = 21),
            'nurseId' => $this->faker->numberBetween($min = 22, $max = 71),
            'pharmacistId' => $this->faker->numberBetween($min = 72, $max = 81),
            'laboratoristId' => $this->faker->numberBetween($min = 82, $max = 96),
            'accountantId' => $this->faker->numberBetween($min = 97, $max = 101),
            'attendStatus' => $this->faker->randomElement($array = array ('yes','no')),
            'doctorRemarks' => $this->faker->paragraph,
            'nurseRemarks' => $this->faker->paragraph,
            'pharmacistRemarks' => $this->faker->paragraph,
            'laboratoristRemarks' => $this->faker->paragraph,
            // 'accountantRemarks' => $this->faker->paragraph,
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
