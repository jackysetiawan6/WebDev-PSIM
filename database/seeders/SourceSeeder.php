<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sources = [
            'Data Hall A1',
            'Genset B2',
            'Chiller A2',
            'Cooling C1',
            'Fire Suppression B1',
            'Security A1',
            'External C2',
        ];

        foreach ($sources as $source) {
            DB::table('sources')->insert([
                'name' => $source,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
