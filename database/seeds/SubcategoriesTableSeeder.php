<?php
use App\Subcategory;
use Illuminate\Database\Seeder;
class SubcategoriesTableSeeder extends Seeder
{
    private $arraySubcategorias = array(
        array(
            'name' => 'Portatiles',            
            'category_id' => 1,
        ),
        array(
            'name' => 'Sobremesa',            
            'category_id' => 1,
        ),
        array(
            'name' => 'Tablets',            
            'category_id' => 1
        ),
        array(
            'name' => 'Perifericos',
            'category_id' => 1,
        ),
        array(
            'name' => 'Reflex',            
            'category_id' => 2,
        ),
        array(
            'name' => 'Evil',
            'category_id' => 2,
        ),
        array(
            'name' => 'Objetivos',          
            'category_id' => 2,
        ),
        array(
            'name' => 'Deportivas',            
            'category_id' => 2,
        ),
        array(
            'name' => 'Smartphones',            
            'category_id' => 3,
        ),
        array(
            'name' => 'Smartwatches',            
            'category_id' => 3,
        ),
        array(
            'name' => 'Telefonia domestica',            
            'category_id' => 3,
        ),
        array(
            'name' => 'Videojuegos',            
            'category_id' => 4,
        ),
        array(
            'name' => 'Consolas',            
            'category_id' => 4,
        ),
        array(
            'name' => 'Televisores',            
            'category_id' => 5,
        ),
        array(
            'name' => 'Proyectores',            
            'category_id' => 5,
        ),
        array(
            'name' => 'Cables',            
            'category_id' => 6,
        ),
        array(
            'name' => 'Cargadores',            
            'category_id' => 6,
        ),
        array(
            'name' => 'Audio',            
            'category_id' => 6,
        ),
        array(
            'name' => 'Video',            
            'category_id' => 6,
        ),
        array(
            'name' => 'Baterias',            
            'category_id' => 6,
        ),
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('subcategories')->truncate();
        foreach ($this->arraySubcategorias as $subcategoria) {
            $subcategory = new Subcategory();
            $subcategory->name = $subcategoria['name'];
            $subcategory->category_id = $subcategoria['category_id'];
            $subcategory->save();
        }
        Schema::enableForeignKeyConstraints();
    }
}