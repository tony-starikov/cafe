<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Чизкейк с клубникой',
                'code' => 'product_1',
                'description' => 'Чизкейк с кислинкой и клубнично-мятным джемом. Состав: мука, творог, сливки, молоко, сахар, клубника, мята, орехи.',
                'price' => '100',
                'category_id' => 1,
                'image' => 'products/1.png',
            ],
            [
                'name' => 'Бельгийская вафля',
                'code' => 'product_2',
                'description' => 'Вафля по-бельгийски с шоколадом и ягодами. Состав: мука, яйца, сахар, шоколад, смородина, ежевика, орехи, джем.',
                'price' => '110',
                'category_id' => 1,
                'image' => 'products/2.png',
            ],
            [
                'name' => 'Киевский медовик',
                'code' => 'product_3',
                'description' => 'Авторский рецепт от нашего Шеф-повара.
Состав: мука, яйца, сахар, масло, мед, орехи, молоко, сливки, ванилин.',
                'price' => '120',
                'category_id' => 1,
                'image' => 'products/3.png',
            ],
            [
                'name' => 'Черничный пирог',
                'code' => 'product_4',
                'description' => 'Черничный пирог от Шефа. Состав: мука, молоко, масло, орехи, сливки, черника, сахар, ваниль.',
                'price' => '100',
                'category_id' => 1,
                'image' => 'products/4.png',
            ],
            [
                'name' => 'Шоколадный брауни',
                'code' => 'product_5',
                'description' => 'Шоколадный брауни, 150 гр. с нотками цитруса.
По эксклюзивному рецепту нашего шеф-повара',
                'price' => '80',
                'category_id' => 1,
                'image' => 'products/5.png',
            ],
            [
                'name' => 'Цитрус торт',
                'code' => 'product_6',
                'description' => 'Суфлейный. Состав: мука, молоко, цитрусовые, орехи, шоколад, сахар, ванилин, персик, клубника, ананас.',
                'price' => '60',
                'category_id' => 1,
                'image' => 'products/6.png',
            ],
            [
                'name' => 'Клюквенный пирог',
                'code' => 'product_7',
                'description' => 'Фирменный рецепт нашего Шеф-повара. Состав: мука, сахар, клюквенный джем, мак, маргарин, орехи, гранат',
                'price' => '70',
                'category_id' => 1,
                'image' => 'products/7.png',
            ],
            [
                'name' => 'ПП десерт',
                'code' => 'product_8',
                'description' => 'Максимум вкуса - минимум калорий. Состав: йогурт, стевия, овсяные хлопья, ягоды, орехи, ваниль, мята.',
                'price' => '75',
                'category_id' => 1,
                'image' => 'products/8.png',
            ],
            [
                'name' => 'Чай Зеленый',
                'code' => 'product_9',
                'description' => 'Чай зеленый, 200 мл.',
                'price' => '45',
                'category_id' => 2,
                'image' => 'products/9.png',
            ],
            [
                'name' => 'Лавандовый латте',
                'code' => 'product_10',
                'description' => 'Латте с привкусом лаванды.',
                'price' => '35',
                'category_id' => 2,
                'image' => 'products/10.png',
            ],
            [
                'name' => 'Чай ромашковый',
                'code' => 'product_11',
                'description' => 'Успокаивающий ромашковый чай.',
                'price' => '15',
                'category_id' => 2,
                'image' => 'products/11.png',
            ],
        ]);
    }
}
