<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       return [
            'title' => $this->faker->title(),
            'user_id' => User::all()->random()->id,
            'slug' => $this->faker->slug(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'sub_title' => $this->faker->title(),
            'description' => $this->faker->sentence(),
        ];     
    }
}
