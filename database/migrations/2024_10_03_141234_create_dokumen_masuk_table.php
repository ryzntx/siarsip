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
        Schema::create('dokumen_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('no_dokumen');
            $table->string('perihal');
            $table->string('penerima');
            $table->string('asal_dokumen');
            $table->string('lampiran');
            $table->date('tanggal_masuk');
            $table->foreignId('instansi_id')->constrained();
            $table->foreignId('dokumen_kategori_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_masuks');
    }
};
