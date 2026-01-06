<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->id();
            $table->string('program_studi');
            $table->string('fakultas');
            $table->enum('jenjang', ['D3', 'S1', 'S2', 'S3', 'Profesi'])->default('S1');
            $table->string('peringkat')->nullable();
            $table->string('nomor_sk')->nullable();
            $table->date('tanggal_sk')->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
            $table->string('lembaga_akreditasi')->nullable();
            $table->string('sertifikat')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('akreditasis');
    }
};
