<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IncidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $incidents = [];

        for ($i = 1; $i <= 1257; $i++) {
            $incidents[] = [
                'incident_id' => $faker->numberBetween(1000000, 9999999),
                'status' => $faker->randomElement(['Cancelled', 'Logged', 'Active', 'Waiting for Customer', 'Waiting for 3rd Party', 'Resolved', 'Closed']),
                'source_id' => $faker->numberBetween(1, 7),
                'location_id' => $faker->numberBetween(1, 5),
                'incident_owner' => $faker->name,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 months', 'now'),
            ];
        }

        DB::table('incidents')->insert($incidents);
    }
}
