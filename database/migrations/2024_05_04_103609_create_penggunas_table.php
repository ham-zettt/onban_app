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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_customer');
            $table->foreignId('login_id')->references('id')->on('login')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('foto_profil')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
