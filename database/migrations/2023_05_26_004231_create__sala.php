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
        Schema::create('_sala', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomeFilme');
            $table->string('qtPolt');
            $table->string('numSala');
            $table->string('statusSala');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sala');
    }
};
