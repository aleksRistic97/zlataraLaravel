<?php

namespace Database\Seeders;

use App\Models\Nakit;
use App\Models\Porudzbenica;
use Illuminate\Database\Seeder;
 
class PorudzbenicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Porudzbenica::factory(5)->create();
    }
}
