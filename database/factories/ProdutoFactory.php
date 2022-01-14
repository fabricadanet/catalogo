<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence,
            'preco' => $this->faker->randomDigitNotNull(5),
            'quantidade' => 10,
            'image' => $this->faker->imageUrl(640, 480, 'cats'),
            'categoria_id' => CategoriaFactory::new()->create()->id,
        ];

    }
}