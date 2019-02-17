<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrdersTableSeeder::class); 
        $this->call(OrderLinesTableSeeder::class);               
        $this->call(TaxesTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(ProviderOrdersTableSeeder::class); 
        
        Schema::enableForeignKeyConstraints();
    }
}
