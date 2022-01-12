<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nakit;
class NakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Nakit::factory(10)->create();
    }
}
