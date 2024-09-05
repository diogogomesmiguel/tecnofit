<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CliUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cli_users')->upsert([
            ['name' => 'João'],
            ['name' => 'José'],
            ['name' => 'Paulo'],
        ],
            ['id']
        );
    }
}
