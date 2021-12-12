<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('errors')->insert([
            ['text' => 'пожалуйста, вводите только русские символы'],
            ['text' => 'пожалуйста, вводите только цифры']
        ]);
    }
}
