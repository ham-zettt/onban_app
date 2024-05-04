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
        Schema::create('pekerja', function (Blueprint $table) {
            $table->id('id_pekerja');
            $table->string('nama', 50);
            $table->string('alamat', 100);
            $table->string('no_hp', 13);
            $table->string('email', 50);
            $table->string('password', 255);
            $table->string('foto_formal');
            $table->string('foto_ktp');
            $table->enum('status_menerima_pesanan', ['aktif', 'nonaktif']);
            $table->enum('status_verifikasi', ['terverifikasi', 'belum terverifikasi']);
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->timestamps();
            $table->foreignId('jenis_kelamin_id')->references('id_jenis_kelamin')->on('jenis_kelamin')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerja');
    }
};
