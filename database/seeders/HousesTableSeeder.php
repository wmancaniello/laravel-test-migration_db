<?php

namespace Database\Seeders;

// Aggiunte:
use Faker\Generator as Faker;
use App\Models\House;
// Aggiunte

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newHouse = new House();
        $newHouse ->address = $faker->address();
        $newHouse->city = $faker->city();
        $newHouse->state = $faker->state();
        $newHouse->square_meters = $faker->numberBetween(20, 200);
        $newHouse->rooms_number = $faker->numberBetween(1, 10);
        $newHouse->description = $faker->text(200);
        $newHouse->price = $faker->randomFloat(2, 50000, 250000);
        $newHouse->energy_rating = $faker->randomElement(["A", "B", "C", "D", "E", "F"]);
        $newHouse->save(); // Salvo i dati
        dd($newHouse);
    }
}
