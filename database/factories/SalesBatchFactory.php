<?php

namespace Database\Factories;

use App\Models\SalesBatch;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesBatchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SalesBatch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'count'=>$this->faker->numberBetween(25,500),
            'batchFile'=>$this->faker->filePath(),
            'user_id'=>$this->faker->numberBetween(1,20)
        ];
    }
}
