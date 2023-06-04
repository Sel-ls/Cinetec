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
        Schema::create('sessaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('numSala');
            $table->string('nomeFilme');
            $table->string('timeSessao');
            $table->string('dateSessao');
            $table->string('statusSessao')->default('Aberta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessaos');
    }
};
