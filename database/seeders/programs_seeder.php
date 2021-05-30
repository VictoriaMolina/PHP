<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class programs_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'nameProgram' => 'Crash Landing On You',
            'genre' => 'Drama',
            'chapters' => '16',
            'month' => 'March'
        ]);

        DB::table('programs')->insert([
            'nameProgram' => 'Goblin',
            'genre' => 'Drama',
            'chapters' => '16',
            'month' => 'April'
        ]);
    }
}
