<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Animation',
                'alias' => 'animation',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2zgaSqH0bmTXIL_9QgtE8l_kyom-B0b0W7VpM0YSxtzKvQiB0',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Detective',
                'alias' => 'detective',
                'image' => 'https://thumbs.dreamstime.com/b/retro-detective-s-style-gumshoe-sleuth-conducting-surveillance-74038118.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Mystic',
                'alias' => 'mystic',
                'image' => 'https://static.spektrnews.in.ua/img/2016/01/221/22181_500xx_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Comedy',
                'alias' => 'comedy',
                'image' => 'http://image.kinoprofi.org/u/1425003507_b0c67b45cf.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
