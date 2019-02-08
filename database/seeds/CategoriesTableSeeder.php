<?php

use App\Category;
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
        DB::table('categories')->truncate();
        $category = new Category();
        $category->name = 'Informatica';
        $category->save();
        $category = new Category();
        $category->name = 'Fotografía';
        $category->save();
        $category = new Category();
        $category->name = 'Telefonía';
        $category->save();
        $category = new Category();
        $category->name = 'Ocio';
        $category->save();
        $category = new Category();
        $category->name = 'Televisión';
        $category->save();
        $category = new Category();
        $category->name = 'Accesorios';
        $category->save();
    }
}
