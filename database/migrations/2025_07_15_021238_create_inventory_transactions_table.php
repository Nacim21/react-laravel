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
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->id('inventory_transaction_id');
            $table->unsignedBigInteger('product_id')->references('product_id')->on('products');
            $table->string('inventory_transaction_type');
            $table->integer('inventory_transaction_quantity');
            $table->dateTime('inventory_transaction_datetime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_transactions');
    }
};
