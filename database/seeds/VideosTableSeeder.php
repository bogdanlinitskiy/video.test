<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'name' => 'Stupid Thomas',
                'alias' => 'stupid_thomas',
                'image' => '1535106801_91b9321a38b5a9e5fc4b6d24bfbffa86.jpg',
                'video' => '1535106225_20131212_142913.mp4',
                'description' => 'that stupid cat Thomas',
                'date' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Some test video',
                'alias' => 'some_test_video',
                'image' => '1536243616_Drfne_iXJxI.jpg',
                'video' => '1535202203_20130901_092813.mp4',
                'description' => 'Some test video',
                'date' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'more test videos',
                'alias' => 'more_test_videos',
                'image' => '1536243762_aki2.png',
                'video' => '1536243762_20131212_142913.mp4',
                'description' => 'some more test videos',
                'date' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
