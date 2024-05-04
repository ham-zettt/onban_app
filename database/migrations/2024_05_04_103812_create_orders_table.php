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
            $table->foreignId('status_order_id')->references('id_status_order')->on('status_order')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('metode_pembayaran_id')->references('id_metode_pembayaran')->on('metode_pembayaran')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('status_pembayaran_id')->references('id_status_pembayaran')->on('status_pembayaran')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('harga');
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
