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
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        $category = new Category();
        $category->name = 'Informatica';
        $category->save();
        $category = new Category();
        $category->name = 'Fotografia';
        $category->save();
        $category = new Category();
        $category->name = 'Telefonia';
        $category->save();
        $category = new Category();
        $category->name = 'Ocio';
        $category->save();
        $category = new Category();
        $category->name = 'Television';
        $category->save();
        $category = new Category();
        $category->name = 'Accesorios';
        $category->save();
        Schema::enableForeignKeyConstraints();
    }
}
