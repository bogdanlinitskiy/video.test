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
                'name' => 'IT',
                'alias' => 'IT',
                'image' => 'https://www.spartanburgcounty.org/ImageRepository/Document?documentID=2389',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Маркетинг',
                'alias' => 'marketing',
                'image' => 'https://www.buh24.com.ua/wp-content/uploads/2017/11/fitnessmarketing.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Видео & Анимация',
                'alias' => 'videoNAnimation',
                'image' => 'https://i.ytimg.com/vi/mpbxsfrEmKg/maxresdefault.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Дизайн',
                'alias' => 'design',
                'image' => 'http://atlant.agency/wp-content/uploads/2016/08/dis2.png',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Фан и Лайфстайл',
                'alias' => 'funNLifestyle',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/08/dd/87/79/hotel-paradise-park-resort.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Бизнес',
                'alias' => 'business',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPYSjuU1QD1swsZUG-la02i4KB-yb927tA33HZX4kJJagJYPO0dg',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
