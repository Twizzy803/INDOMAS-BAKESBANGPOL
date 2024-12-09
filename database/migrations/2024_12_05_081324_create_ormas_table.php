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
        Schema::disableForeignKeyConstraints();

        Schema::create('ormas', function (Blueprint $table) {
            $table->id();
            $table->string('pemohon');
            $table->string('telp');
            $table->string('email');
            $table->string('password');
            $table->string('nama_ormas');
            $table->text('alamat');
            $table->text('struktur_pengurus');
            $table->foreignId('kategori_ormas_id')->constrained('kategori_ormas');
            $table->enum('status', ["setuju","tolak","pending"]);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ormas');
    }
};
