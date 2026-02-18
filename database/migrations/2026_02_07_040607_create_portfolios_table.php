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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // nama proyek
            $table->string('client')->nullable();
            $table->string('location')->nullable();
            $table->year('year')->nullable();
            $table->string('service_type'); // arsitektur, struktur, pengawasan, dll
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable(); // gambar utama
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
