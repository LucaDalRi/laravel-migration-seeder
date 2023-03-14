<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TreniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10 ; $i++) { 
            $nuovoTreno = new Train();
            $nuovoTreno->nome_azienda = $faker->company();
            $nuovoTreno->stazione_partenza = $faker->city();
            $nuovoTreno->stazione_arrivo = $faker->city();
            $nuovoTreno->codice_treno = $faker->bothify('??##??');
            $nuovoTreno->numero_carrozze = $faker->numberBetween(2,15);
            $nuovoTreno->in_orario = $faker->boolean();
            $nuovoTreno->cancellato = $faker->boolean();
            $nuovoTreno->orario_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $nuovoTreno->orario_arrivo = $faker->dateTimeBetween('+1 week', '+2 week');
            $nuovoTreno->save();
        }
    }
}
