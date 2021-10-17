<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710154',
            'name' => 'WENDHA ALDAFA PUTRA HERANUSA',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085678883123',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710164',
            'name' => 'CELLINE SALSABIELA',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085778980987',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710171',
            'name' => 'FIRDA ARGA',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085700989890',
        ]);
    }
}