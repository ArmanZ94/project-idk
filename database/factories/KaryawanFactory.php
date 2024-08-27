<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
	protected $model = Karyawan::class; 
	 
    public function definition(): array
    {
        $randomId = $this->faker->numberBetween(2, 4);

        return [
            'nama' => $this->faker->name(),
            'jabatan_id' => $randomId,
            'ruangan_id' => $randomId,
        ];
    }
}
