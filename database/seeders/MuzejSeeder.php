<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MuzejSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        DB::table('muzejs')->insert([
            'grad' => $faker->city(),
            'adresa' => $faker->streetAddress(),
            'naziv' => $faker->catchPhrase()
        ]);
    }
}
