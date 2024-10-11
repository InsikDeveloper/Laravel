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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();  
            $table->string('first_name');  
            $table->string('last_name');  
            $table->string('email')->unique(); 
            $table->string('phone')->nullable(); 
            $table->string('expertise');  
            $table->integer('years_of_experience')->nullable();  
            $table->string('status')->default('active'); 
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
