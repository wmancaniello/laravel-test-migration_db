<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseTableSeederArray extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $housesData = config("seeder-data");
        foreach ($housesData as $houseData) {
            $newHouse = new House();
            $newHouse->address = $houseData["address"];
            $newHouse->city = $houseData["city"];
            $newHouse->state = $houseData["state"];
            $newHouse->square_meters = $houseData["square_meters"];
            $newHouse->rooms_number = $houseData["rooms_number"];
            $newHouse->description = $houseData["description"];
            $newHouse->price = $houseData["price"];
            $newHouse->is_available = $houseData["is_available"];
            $newHouse->energy_rating = $houseData["energy_rating"];
            $newHouse->save();
        }
    }
}
