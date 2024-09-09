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
        Schema::create('nosotros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sobre_nosotros');
            $table->string('mision');
            $table->string('vision');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nosotros');
    }
};
