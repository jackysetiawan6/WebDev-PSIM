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
                'source_id' => $faker->numberBetween(1, 7),
                'name' => $faker->name,
                'remarks' => 'Stranger',
                'priority' => $faker->randomElement(['low', 'medium', 'high']),
                'incident_owner' => $faker->name,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 months', 'now'),
            ];
        }

        DB::table('events')->insert($events);
    }
}
