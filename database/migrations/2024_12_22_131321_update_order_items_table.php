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
        Schema::table('order_items', function (Blueprint $table) {
            // Only update the columns if necessary, avoiding duplicate column additions
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');

            // Modify column types or add new columns
            $table->unsignedBigInteger('order_id')->change(); // Ensure it's the correct type
            $table->unsignedBigInteger('product_id')->change(); // Ensure it's the correct type
            $table->string('name'); // Add the name column
            $table->decimal('price', 10, 2); // Price column
            $table->integer('quantity'); // Quantity column
            $table->decimal('subtotal', 10, 2); // Subtotal column

            // Add timestamps back if needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            // Rollback any changes made during the up migration
            $table->dropColumn('subtotal'); // Drop 'subtotal' if added
        });
    }
};
