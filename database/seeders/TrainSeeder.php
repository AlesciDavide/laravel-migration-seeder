<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) {
            $train = new Train();
            $train->azienda = $faker->words(2, true);
            $train->stazione_di_partenza = $faker->words(4, true);
            $train->stazione_di_arrivo = $faker->words(4, true);
            $train->orario_di_partenza = "2024-07-18 06:00:00";
            $train->orario_di_arrivo = "2024-07-18 10:00:00";
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_carrozze = $faker->randomNumber(2, true);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
