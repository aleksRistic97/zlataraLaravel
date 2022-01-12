<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use App\Models\Nakit;
use App\Models\Porudzbenica;
use App\Models\User;
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Porudzbenica::truncate();
        User::truncate();
        Nakit::truncate();
        Kategorija::truncate();
        


         \App\Models\User::factory(10)->create();




          $ks = new KategorijaSeeder();
         $ks->run();

         $ns = new NakitSeeder();
         $ns->run();

         $ps = new PorudzbenicaSeeder();
         $ps->run();
    }
}
