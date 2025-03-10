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
    Schema::create('routes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('start_location');
        $table->string('end_location');
        $table->foreignIdFor(Branch::class)->onDelete('cascade');
        $table->decimal('fare', 8, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
