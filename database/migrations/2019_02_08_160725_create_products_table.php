<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('object');
            $table->string('name')->nullable();
            $table->string('brand');
            $table->string('model')->nullable();
            $table->text('description')->nullable();
            $table->text('specifications')->nullable();
            $table->float('price')->nullable();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('subcategory_id');
            $table->unsignedInteger('provider_id');
            $table->integer('stock')->nullable();
            $table->unsignedInteger('taxes_id');
            $table->boolean('active');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}