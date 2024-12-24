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
      Schema::create('districts', function (Blueprint $table) {
        $table->id();
        $table->string('name', 30)->unique()->nullable(false);
        $table->string('alt_name', 30)->unique()->nullable(false);
        $table->double('latitude')->nullable(false);
        $table->double('longitude')->nullable(false);
        $table->foreignId('regency_id')->constrained();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
