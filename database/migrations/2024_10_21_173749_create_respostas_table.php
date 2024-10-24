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
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Desafio::class)->constrained()->onUpdates('cascade')->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Alternativa::class)->constrained()->onUpdates('cascade')->onDelete('cascade');
            $table->string('resposta_body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
};
