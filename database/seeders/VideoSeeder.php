<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            ['title' => 'Video 1'],
            ['title' => 'Video 2'],
            ['title' => 'Video 3'],
            ['title' => 'Video 4'],
            ['title' => 'Video 5'],
            ['title' => 'Video 6'],
            ['title' => 'Video 7'],
            ['title' => 'Video 8'],
            ['title' => 'Video 9'],
            ['title' => 'Video 10'],
            ['title' => 'Video 11'],
            ['title' => 'Video 12'],
            ['title' => 'Video 13'],
            ['title' => 'Video 14'],
            ['title' => 'Video 15'],
            ['title' => 'Video 16'],
            ['title' => 'Video 17'],
            ['title' => 'Video 18'],
            ['title' => 'Video 19'],
            ['title' => 'Video 20']
        ];

        Video::insert($videos);
    }
}
