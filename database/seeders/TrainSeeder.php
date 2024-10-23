<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// MODELS
use App\Models\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->code = strtolower(fake()->shuffle(fake()->bothify('????####')));
            $train->company = fake()->company();
            $train->dep_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->dep_time = fake()->time();
            $train->arr_time = fake()->time();
            $train->carriages_number = rand(2, 12);
            $train->on_time = fake()->boolean();
            $train->canceled = fake()->boolean();
            $train->save();
        }
    }
}
