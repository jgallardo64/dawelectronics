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
            $table->integer('categoryid');
            $table->integer('subcategoryid');
            $table->integer('providerid');
            $table->string('imgRoute')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('taxesid');
            /*$table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');*/
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