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
                'image' => '1535099057_adolf2.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Detective',
                'alias' => 'detective',
                'image' => '1535098945_0s0wYvH1lQ8.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Mystic',
                'alias' => 'mystic',
                'image' => '1535099085_telkaptitsa.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Comedy',
                'alias' => 'comedy',
                'image' => '1535099057_adolf2.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
