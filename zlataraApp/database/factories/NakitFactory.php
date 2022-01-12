<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kategorija;

class NakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'naziv' => $this->faker->randomElement($array = array ('srebrna ogrlica','zlatna narukvica','dijamantska ogrlica','verenicki prsten','bff narukvice')),
            'opis' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'boja_zlata' => $this->faker->randomElement($array = array ('zuta','bela','roze','zelena')),
            'proizvedeno_u' => $this->faker->country(),
           
          
            'cena' =>  $this->faker->numberBetween($min =1000, $max = 10000),
            'kategorija_id' => Kategorija::find(random_int(1,Kategorija::count()))

        ];
    }
}
