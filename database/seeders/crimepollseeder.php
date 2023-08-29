<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class crimepollseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crime_test')->insert(
            [
                'police_name'=>Str::random(10),  //adding dummy values
                'station'=>Str::random(10)
            ]
            );
    }
}
