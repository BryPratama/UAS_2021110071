<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
=======
<<<<<<< HEAD

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
=======
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            //
=======
<<<<<<< HEAD
            //
=======
            'sku'                   => Str::random(10),
            'nama_product'          => fake()->name(),
            'type'                  => "Celana",
            'kategory'              => "Pria",
            'harga'                 => 100000,
            'quantity'              => 10,
            'discount'              => 10 / 100,
            'is_active'             => 1,
            'foto'                  => fake()->name(),
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ];
    }
}
