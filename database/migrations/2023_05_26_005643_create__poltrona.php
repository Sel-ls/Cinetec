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
        Schema::create('poltronas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('posicaoPolt');
            $table->string('statusPolt');
            $table->string('numSala');
            $table->string('sessao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poltronas');
    }
};
