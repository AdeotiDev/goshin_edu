<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */



    // result_root
    // student id (user_id)
    // class_id



    // skills = ['fluency' => 5, 'games' => 3, 'writing' => 4 ]
    // behavior = ['neatness' => 4, 'politeness' => 4, 'self control' => 5]




    public function up(): void
    {
        Schema::create('skill_behavioursx', function (Blueprint $table) {
            $table->id();
            $table->foreignId('result_root_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //student
            $table->foreignId('class_id')->constrained()->onDelete('cascade');
            $table->json('skills')->nullable();
            $table->json('behavior')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_behaviours');
    }
};
