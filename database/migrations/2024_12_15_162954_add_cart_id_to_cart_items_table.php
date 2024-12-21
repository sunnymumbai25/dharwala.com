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
        Schema::table('cart_items', function (Blueprint $table) {
            $table->unsignedBigInteger('cart_id'); // Add cart_id column
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade'); // Foreign key to carts table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropForeign(['cart_id']); // Drop foreign key constraint
            $table->dropColumn('cart_id'); // Drop cart_id column
        });
    }
};
