<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Nakit;


class PorudzbenicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adresaDostave' => $this->faker->address(),
            'vreme' => $this->faker-> dateTimeBetween($startDate = '-2 years', $endDate = '+2 years', $timezone = null),
            'user_id'=> User::find(random_int(1,User::count())),
            'nakit_id' => Nakit::find(random_int(1,Nakit::count()))
        ];
    }
}
