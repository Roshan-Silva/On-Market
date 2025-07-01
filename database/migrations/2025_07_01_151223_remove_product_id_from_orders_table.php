<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // Drop foreign key first
            $table->dropForeign(['product_id']);

            // Then drop the column
            $table->dropColumn('product_id');
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');

            // Recreate the foreign key
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }
};
