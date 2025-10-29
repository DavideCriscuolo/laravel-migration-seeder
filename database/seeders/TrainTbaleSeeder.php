<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

//importiamo il faker

use Faker\Generator as Faker;

class TrainTbaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 25; $i++) {

            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify("???-###"); //questo crea una stringa con dei numeri e lettere randomiche
            $train->tot_carrozze = $faker->numberBetween(1, 20);
            $train->in_orario = $faker->numberBetween(0, 1); //siccome nel db è un booleano idnicato con 0 e 1
            $train->cancellato = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
