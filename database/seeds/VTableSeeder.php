<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_tables')->truncate();
        DB::table('video_tables')->insert([

            // Copy the below code to feed all questions in database.
            [
                'Type' => 'Java Basic',
                'Url' => '\storage\app\public\Java Tutorial1.mp4',
            ],
        ]);
    }
}
