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
        $randomJabatanId = $this->faker->numberBetween(2, 4);
        $randomRuanganId = $this->faker->numberBetween(2, 4);
        $randomGajiId = $this->faker->numberBetween(1, 3);

        return [
            'nama' => $this->faker->name(),
            'gaji_id' => $randomGajiId,
            'jabatan_id' => $randomJabatanId,
            'ruangan_id' => $randomRuanganId,
        ];
    }
}
