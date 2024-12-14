<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $events = [];

        for ($i = 1; $i <= 2153; $i++) {
            $events[] = [
                'event_id' => $faker->numberBetween(1000000, 9999999),
                'source' => $faker->word,
                'name' => $faker->name,
                'remarks' => 'Stranger',
                'priority' => $faker->randomElement(['low', 'medium', 'high']),
                'incident_owner' => $faker->name,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('events')->insert($events);
    }
}
