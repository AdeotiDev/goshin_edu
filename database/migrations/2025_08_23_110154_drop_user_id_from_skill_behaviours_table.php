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
        Schema::table('skill_behaviours', function (Blueprint $table) {
            if (Schema::hasColumn('skill_behaviours', 'user_id')) {
                $table->dropConstrainedForeignId('user_id'); // if this errors in your version, drop FK then column separately
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skill_behaviours', function (Blueprint $table) {
            //
            // Note: Re-adding the column without data restoration.
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        });
    }
};
