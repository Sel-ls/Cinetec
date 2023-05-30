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
        Schema::create('filme', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomeFilme');
            $table->string('atoresFilme');
            $table->date('dataLancamento');
            $table->longText('sinopseFilme');
            $table->string('capaFilme');
            $table->string('bannerFilme');
            $table->string('statusFilme');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filme');
    }
};
