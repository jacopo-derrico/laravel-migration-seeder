<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Address;
use App\Models\Train;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 200; $i++) { 
            $newTrain = new Train();
                $newTrain->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord']);
                $newTrain->stazione_partenza = $faker->city('it_IT');
                $newTrain->stazione_arrivo = $faker->city('it_IT');
                $newTrain->orario_partenza = $faker->dateTimeThisYear('+2 months')->format('Y-m-d H:i:s');
                $newTrain->orario_arrivo = $faker->dateTimeThisYear('+2 months')->format('Y-m-d H:i:s');
                $newTrain->codice_treno = $faker->randomNumber(4, true);
                $newTrain->numero_carrozze = $faker->numberBetween(2, 9);
                $newTrain->in_orario = $faker->randomElement([0, 1]);
                $newTrain->cancellato = $faker->randomElement([0, 1]);
            $newTrain->save();
        }
    }
}
