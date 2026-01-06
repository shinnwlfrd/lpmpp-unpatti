<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kategori', [
                'pedoman_akreditasi',
                'arsip_spmi', 
                'arsip_ami',
                'arsip_pelatihan',
                'arsip_pembelajaran',
                'hasil_survey',
                'lainnya'
            ])->default('lainnya');
            $table->string('lembaga')->nullable(); // untuk pedoman akreditasi
            $table->string('file')->nullable(); // file upload
            $table->string('link_external')->nullable(); // link google drive dll
            $table->text('deskripsi')->nullable();
            $table->integer('urutan')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};
