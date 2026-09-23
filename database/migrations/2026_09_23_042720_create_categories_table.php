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
    Schema::create('categories', function (Blueprint $table) {
        $table->uuid('id')->primary(); // Membuat ID dengan format UUID dan menjadikannya kunci utama
        $table->string('name', 100); // Kolom nama maksimal 100 karakter
        $table->string('slug', 120)->unique(); // Kolom URL yang tidak boleh ada duplikat (unique)
        $table->text('description')->nullable(); // Kolom deskripsi yang boleh dikosongkan (nullable)
        $table->boolean('is_active')->default(true); // Kolom status aktif, otomatis bernilai 'true' jika tidak diisi
        $table->timestamps(); // Otomatis membuat kolom created_at dan updated_at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
