<?php

namespace Database\Factories;

use App\Models\House;
use App\Models\Price;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'title'=>$name,
            'description' =>$this->faker->paragraph(),
            'slug'=>Str::slug($name),
            'status'=>$this->faker->randomElement([House::BORRADOR, House::PUBLICADO]),
            'user_id'=>1,
            'price_id'=>Price::all()->random()->id
        ];
    }
}
