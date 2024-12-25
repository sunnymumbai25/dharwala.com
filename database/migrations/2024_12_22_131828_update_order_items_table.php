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
            $table->decimal('subtotal', 10, 2)->nullable(false)->after('quantity'); // Subtotal column
            $table->timestamp('created_at')->useCurrent()->nullable()->after('subtotal'); // Created_at column
            $table->timestamp('updated_at')->useCurrent()->nullable()->after('created_at'); // Updated_at column
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            // Rollback the changes if needed
            $table->dropColumn(['subtotal', 'created_at', 'updated_at']);
        });
    }
};
