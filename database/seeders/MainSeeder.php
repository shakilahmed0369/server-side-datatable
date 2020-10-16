<?php

namespace Database\Seeders;

use App\Models\DataTable;
use Illuminate\Database\Seeder;


class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.  
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i <= 10000; $i++){
            $main = new DataTable();
            $main->name = $faker->name();
            $main->email = $faker->email();
            $main->country = $faker->country();
            $main->save();
        }
    }
}
