<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Controller extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('controller')->insert([
            'token' => 252525,
            'lng' => 109.12188833333333,
            'lat' => -6.8836216666666665,
            'ult' => 0,
        ]);
    }
}
