<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            [
                'nickname' => 'animelity',
                'first_name' => 'Bohdan',
                'last_name' => 'Linitsky',
                'alias' => 'bohdanlinitsky',
                'birth_date' => '1997-03-14',
                'height' => '178',
                'image' => '1535206590_20150627_014657.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'nickname' => 'Opolchenets',
                'first_name' => 'Daniil',
                'last_name' => 'Semenko',
                'alias' => 'daniilsemenko',
                'birth_date' => '1997-06-20',
                'height' => '180',
                'image' => '1535190276_женечка.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
