<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 30; $i++) {
            DB::table('countries')->insert([
                'name' => $faker->firstName,
                'short_name' => $faker->lastName,
                'language' => $faker->languageCode,
            ]);
        }
    }
}
