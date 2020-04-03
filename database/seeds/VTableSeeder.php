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
                'url' => '\storage\app\public\JavaTutorial1.mp4',
            ],
            [
                'Type' => 'Java Basic',
                'url' => '\storage\app\public\JavaTutorial2.mp4',
            ],
            [
                'Type' => 'Java Basic',
                'url' => '\storage\app\public\JavaTutorial3.mp4',
            ],
            [
                'Type' => 'Java Medium',
                'url' => '\storage\app\public\JavaTutorial4.mp4',
            ],
            [
                'Type' => 'Java Medium',
                'url' => '\storage\app\public\JavaTutorial5.mp4',
            ],
            [
                'Type' => 'Java Medium',
                'url' => '\storage\app\public\JavaTutorial6.mp4',
            ],
            [
                'Type' => 'Java High',
                'url' => '\storage\app\public\JavaTutorial7.mp4',
            ],
            [
                'Type' => 'Java High',
                'url' => '\storage\app\public\JavaTutorial8.mp4',
            ],
            [
                'Type' => 'DSA Basic',
                'url' => '\storage\app\public\DSA1.mp4',
            ],
            [
                'Type' => 'DSA Basic',
                'url' => '\storage\app\public\DSA2.mp4',
            ],
            [
                'Type' => 'DSA Medium',
                'url' => '\storage\app\public\DSA3.mp4',
            ],
            [
                'Type' => 'DSA Medium',
                'url' => '\storage\app\public\DSA4.mp4',
            ],
            [
                'Type' => 'DSA High',
                'url' => '\storage\app\public\DSA5.mp4',
            ],
            [
                'Type' => 'DSA High',
                'url' => '\storage\app\public\DSA6.mp4',
            ],
            [
                'Type' => 'ML Basic',
                'url' => '\storage\app\public\ML1.mp4',
            ],
            [
                'Type' => 'ML Basic',
                'url' => '\storage\app\public\ML2.mp4',
            ],
            [
                'Type' => 'ML Basic',
                'url' => '\storage\app\public\ML3.mp4',
            ],
            [
                'Type' => 'ML Medium',
                'url' => '\storage\app\public\ML4.mp4',
            ],
            [
                'Type' => 'ML Medium',
                'url' => '\storage\app\public\ML5.mp4',
            ],
            [
                'Type' => 'ML Medium',
                'url' => '\storage\app\public\ML6.mp4',
            ],
            [
                'Type' => 'ML High',
                'url' => '\storage\app\public\ML7.mp4',
            ],
            [
                'Type' => 'ML High',
                'url' => '\storage\app\public\ML8-1.mp4',
            ],
            [
                'Type' => 'ML High',
                'url' => '\storage\app\public\ML8-2.mp4',
            ],
            [
                'Type' => 'ML High',
                'url' => '\storage\app\public\ML9.mp4',
            ],
        ]);
    }
}
