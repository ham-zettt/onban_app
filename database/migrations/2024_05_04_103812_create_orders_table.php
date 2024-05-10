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
        Schema::create('order', function (Blueprint $table) {
            $table->id('id_order');
            $table->foreignId('pengguna_id')->references('id_pengguna')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('pekerja_id')->references('id_pekerja')->on('pekerja')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_voucher', 50);
            $table->enum('status_order', ['Menunggu', 'Diterima', 'Ditolak', 'Selesai', 'Dibatalkan']);
            $table->enum('metode_pembayaran', ['Cash', 'OVO', 'Gopay', 'Dana', 'LinkAja']);
            $table->enum('status_pembayaran', ['Menunggu', 'Berhasil', 'Gagal']);
            $table->integer('total_harga');
            $table->float('jarak');
            $table->text('catatan');
            $table->string('alamat');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->date('tanggal');
            $table->time('waktu');
            $table->timestamps();

            // foreign ke kode voucher

            $table->foreign('kode_voucher')->references('kode_voucher')->on('voucher')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
