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
        Schema::create('diecast', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori_diecast')->cascadeOnDelete();
            $table->string('nama_diecast');
            $table->string('skala')->default('1:64');
            $table->integer('stok')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diecast');
    }
};
