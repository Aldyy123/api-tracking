<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Notification extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notification')->insert([
            'title' => 'Teste',
            'body' => 'Teste',
            'type' => 'success',
        ]);
    }
}
