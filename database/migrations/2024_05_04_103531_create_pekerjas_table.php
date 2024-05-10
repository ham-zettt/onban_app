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
        Schema::create('worker', function (Blueprint $table) {
            $table->id('id_worker');
            $table->foreignId('login_id')->references('id')->on('login')->onDelete('cascade')->onUpdate('cascade');
            $table->string('username')->unique();
            $table->string('nama', 50);
            $table->string('alamat', 100);
            $table->string('no_hp');
            $table->string('email', 50);
            $table->string('password', 255);
            $table->string('foto_formal')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->boolean('status_menerima_order');
            $table->boolean('status_verifikasi');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->timestamps();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker');
    }
};
