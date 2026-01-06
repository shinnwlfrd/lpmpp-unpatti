<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_asesmens', function (Blueprint $table) {
            $table->id();
            $table->string('program_studi');
            $table->string('fakultas');
            $table->string('jenjang')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('lembaga_akreditasi')->nullable();
            $table->enum('status', ['terjadwal', 'berlangsung', 'selesai'])->default('terjadwal');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_asesmens');
    }
};
