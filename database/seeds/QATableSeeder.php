<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QATableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qa_db')->insert([

            // Copy the below code to feed all questions in database.
            [
            'subject' => 'DSA',
            'question' => 'Queue data structure works on ?',
            'correct_option' => 'FIFO',
            'other_option1' => 'LIFO',
            'other_option2' => 'FILO',
            'other_option3' => 'None of the above',
            'answer_explanation' => 'Input some sense here please',
            'answer_diagram' => 'Not available',
            ],
            [
            'subject' => 'ML',
            'question' => 'Some question ?',
            'correct_option' => 'Correct Answer',
            'other_option1' => 'Option',
            'other_option2' => 'Option',
            'other_option3' => 'None of the above',
            'answer_explanation' => 'Input some sense here please',
            'answer_diagram' => 'Not available',
            ],
        ]);
    }
}
