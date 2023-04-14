<?php

namespace Database\Factories;

use App\Factories\CustomFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Fluent;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TweetFactory extends CustomFactory
{
    protected $model = Fluent::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->randomNumber(),
            'content' => $this->faker->text(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
