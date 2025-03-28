<?php

use App\Models\Branch;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('hostels', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('capacity');
        $table->foreignIdFor(Branch::class)->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostels');
    }
};
