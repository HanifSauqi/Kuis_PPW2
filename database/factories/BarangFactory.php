<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>$this->faker->unique()->randomNumber(),
            'nama_barang' => $this->faker->word(), // Menggunakan faker word() untuk nama barang
            'harga' => $this->faker->randomFloat(2, 10, 1000), // Menggunakan faker randomFloat() untuk harga
            'stok' => $this->faker->numberBetween(1, 100), // Menggunakan faker numberBetween() untuk stok
            'tgl_terbit' => $this->faker->date(), // Menggunakan faker date() untuk tanggal terbit
            'id_supplier' => $this->faker->unique()->randomNumber(), 
            //
        ];
    }
}
