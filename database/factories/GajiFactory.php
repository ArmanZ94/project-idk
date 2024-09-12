<?php

namespace Database\Factories;

use App\Models\Gaji;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class GajiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
	protected $model = Gaji::class; 
	 
    public function definition(): array
    {
        $randomGajiPokok = $this->faker->numberBetween(10, 100) * 100000;
        $randomKaryawanId = $this->faker->unique()->numberBetween(2, 20);

        return [
            'gaji_pokok' => $randomGajiPokok,
            'note_gaji' => 'nama|jabatan',
            'karyawan_id' => $randomKaryawanId,
        ];
    }
}