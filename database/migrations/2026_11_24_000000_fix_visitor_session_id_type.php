<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visitors', function (Blueprint $table) {
            $table->string('session_id', 100)->nullable()->change();
        });

        if (! Schema::hasIndex('visitors', ['session_id'])) {
            Schema::table('visitors', function (Blueprint $table) {
                $table->index('session_id');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasIndex('visitors', ['session_id'])) {
            Schema::table('visitors', function (Blueprint $table) {
                $table->dropIndex(['session_id']);
            });
        }
    }
};
