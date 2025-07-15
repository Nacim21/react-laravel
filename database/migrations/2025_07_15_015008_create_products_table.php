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
        Schema::create('products', function (Blueprint $table) {
            $table->id("product_id");
            $table->string("product_name");
            $table->double("product_price");
            $table->unsignedBigInteger("product_category_id")->references('category_id')->on('categories');
            $table->unsignedBigInteger("product_supplier_id")->references('supplier_id')->on('suppliers');
            $table->integer("product_stock");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
