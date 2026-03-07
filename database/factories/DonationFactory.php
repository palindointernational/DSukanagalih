<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(4);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . fake()->unique()->numberBetween(1, 9999),
            'description' => fake()->paragraph(),
            'item_name' => fake()->randomElement([
                'Baju Anak',
                'Beras',
                'Buku Sekolah',
                'Selimut',
                'Sepatu Anak',
                'Tas Sekolah',
                'Tenda'
            ]),
            'target_quantity' => fake()->numberBetween(100, 10000),
            'unit' => fake()->randomElement(['PCS', 'KG', 'Liter', 'Dus/Karton', 'Unit']),
            'deadline' => fake()->dateTimeBetween('now', '+60 days'),
            'delivery_address' => 'Kantor Desa Sukanagalih Kec. Pacet',
            'latitude' => '-6.702123134023894',
            'longitude' => '107.0560458167822',
            'status' => true,
            'image' => 'img/banner/banner.jpg',
        ];
    }
}
