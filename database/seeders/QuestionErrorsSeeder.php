<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionErrorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionErrors')->insert([
            [
                'questionID' => 1,
                'errorID' => 1
            ],
            [
                'questionID' => 2,
                'errorID' => 2
            ],
        ]);
    }
}
