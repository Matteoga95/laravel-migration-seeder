<?php

namespace Database\Seeders;

use App\Models\train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $train = new train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify("#######");
            $train->numero_carrozze = $faker->random_int(1, 9);
        }
        for ($i = 0; $i < 5; $i++) {
            $train = new train();
            $train->azienda = $faker->company();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->codice_treno = $faker->bothify("#######");
            $train->numero_carrozze = $faker->random_int(1, 9);
        }
    }
}