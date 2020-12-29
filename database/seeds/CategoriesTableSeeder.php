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
                'name' => 'Десерты',
                'code' => 'desserts',
                'description' => '',
                'image' => 'categories/category.jpg',
            ],
            [
                'name' => 'Напитки',
                'code' => 'drinks',
                'description' => '',
                'image' => 'categories/category.jpg',
            ],
//            [
//                'name' => 'Пицца',
//                'code' => 'pizza',
//                'description' => '',
//                'image' => 'categories/category.jpg',
//            ],
//            [
//                'name' => 'Бургеры',
//                'code' => 'burgers',
//                'description' => '',
//                'image' => 'categories/category.jpg',
//            ],
        ]);
    }
}
