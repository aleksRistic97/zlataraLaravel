<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategorija;


class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Kategorija::factory(4)->create();

      $k1 = new Kategorija();
      $k1->naziv='ogrlica';
      $k1->save();
     
      $k2 = new Kategorija();
      $k2->naziv='prsten';
      $k2->save();

      $k3 = new Kategorija();
      $k3->naziv='ostalo';
      $k3->save();






    }
}
