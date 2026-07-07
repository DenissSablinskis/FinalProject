<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ordered_products', function (Blueprint $table) {
            $table->foreign(['order_id'], 'ordered_products_ibfk_1')->references(['id'])->on('orders')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['product_id'], 'ordered_products_ibfk_2')->references(['id'])->on('products')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ordered_products', function (Blueprint $table) {
            $table->dropForeign('ordered_products_ibfk_1');
            $table->dropForeign('ordered_products_ibfk_2');
        });
    }
};
