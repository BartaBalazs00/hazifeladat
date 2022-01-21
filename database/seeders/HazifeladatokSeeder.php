<?php

namespace Database\Seeders;

use App\Models\hazifeladatok;
use Illuminate\Database\Seeder;

class HazifeladatokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hazifeladatok::factory(10)->create();
    }
}
