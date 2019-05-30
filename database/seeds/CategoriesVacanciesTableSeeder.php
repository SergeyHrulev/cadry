<?php

use Illuminate\Database\Seeder;

class CategoriesVacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CategoryVacancy::class, 50)->create();
    }
}
