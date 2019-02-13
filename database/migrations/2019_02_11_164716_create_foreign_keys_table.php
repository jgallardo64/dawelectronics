<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up() {
        Schema::table('subcategories', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('taxes_id')->references('id')->on('taxes');
        });

        Schema::table('order_lines', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('provider_orders', function (Blueprint $table) {
            $table->foreign('provider_id')->references('id')->on('providers');
        });

        Schema::table('provider_order_lines', function (Blueprint $table) {
            $table->foreign('providerorder_id')->references('id')->on('provider_orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        
        Schema::table('subcategories', function (Blueprint $table) {
            $table->dropForeign('subcategories_categoryid_foreign');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_userid_foreign');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_categoryid_foreign');
            $table->dropForeign('products_subcategoryid_foreign');
            $table->dropForeign('products_providerid_foreign');
            $table->dropForeign('products_taxesid_foreign');
        });

        Schema::table('order_lines', function (Blueprint $table) {
            $table->dropForeign('order_lines_orderid_foreign');
            $table->dropForeign('order_lines_productid_foreign');
        });

        Schema::table('provider_orders', function (Blueprint $table) {
            $table->dropForeign('provider_orders_providerid_foreign');
        });

        Schema::table('provider_order_lines', function (Blueprint $table) {
            $table->dropForeign('provider_order_lines_providerorderid_foreign');
            $table->dropForeign('provider_order_lines_productid_foreign');
        });
    }
}