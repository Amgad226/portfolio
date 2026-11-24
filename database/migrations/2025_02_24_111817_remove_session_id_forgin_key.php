<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Kept as a no-op so deployments that already ran this migration remain valid.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No foreign key is used because Laravel session IDs are strings.
    }
};
