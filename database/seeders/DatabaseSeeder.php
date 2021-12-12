<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $erorrSeeder = new ErrorSeeder;
        $erorrSeeder->run();

        $questionsSeeder = new QuestionSeeder;
        $questionsSeeder->run();

        $QuestionErorrSeeder = new QuestionErrorsSeeder;
        $QuestionErorrSeeder->run();
    }
}
