<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              //el campo titulo quiero que se llene con una sentencia
            'title' => $this->faker->sentence,
              //Generar una url de una imagen y le especificamos que tamanio queremos que tenga
            'image' => $this->faker->imageUrl(640, 480),
            'extract' => $this->faker->paragraph,
            'body' => $this->faker->paragraph(3, true),
        ];
    }
}
