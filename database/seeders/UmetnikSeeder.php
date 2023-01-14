<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class UmetnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('umetniks')->insert([
            'ime_prezime' => $faker->name(),
            'stil' => $faker->randomElement($array = array('Renesansa', 'Impresionizam', 'Realizam', 'Ekspresionizam')),
            'nacionalnost' => $faker->country()
        ]);
    }
}
