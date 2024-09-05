<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movements')->upsert([
            ['name' => 'Deadlift'],
            ['name' => 'Back Squat'],
            ['name' => 'Bench Press'],
        ],
            [
                'id'
            ]
        );
    }
}
