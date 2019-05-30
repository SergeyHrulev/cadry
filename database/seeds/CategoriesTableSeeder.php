<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    private $categories = [
        'Подработка',
        'Салоны красоты',
        'Рестораны',
        'IT сфера',
        'Строительство',
        'Доставка еды',
        'Такси',
        'Уборка',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
