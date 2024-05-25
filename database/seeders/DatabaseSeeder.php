<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\MetodePembayaran;
use App\Models\Pekerja;
use App\Models\Pengguna;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use App\Models\StatusPenerimaanWorker;
use App\Models\TipeLayanan;
use App\Models\Voucher;
use App\Models\Worker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        StatusPenerimaanWorker::create([
            'status_penerimaan' => true,
            'keterangan' => 'ditutup sampai 23 Mei 2024',
        ]);

        TipeLayanan::create([
            'nama_tipe_layanan' => 'Motor',
            'deskripsi_tipe_layanan' => 'Motor',
            'harga_tipe_layanan' => 10000,
            'foto_tipe_layanan' => '/tipe-layanan/iJBRCQSCWQdfr5dIvKWDZ8y8e82aMUmt2zMDFRB5.png',
        ]);
        TipeLayanan::create([
            'nama_tipe_layanan' => 'Sepeda',
            'deskripsi_tipe_layanan' => 'Sepeda',
            'harga_tipe_layanan' => 20000,
            'foto_tipe_layanan' => '/tipe-layanan/l9ciVzfzK1PfP1cYeb18mNlFsGMUWeyaEf484eu4.png',
        ]);
        TipeLayanan::create([
            'nama_tipe_layanan' => 'Mobil',
            'deskripsi_tipe_layanan' => 'Mobil',
            'harga_tipe_layanan' => 40000,
            'foto_tipe_layanan' => '/tipe-layanan/eEedB75XeTrjXyOemmIpdSuWVynaTjCSB4z8EqYE.png',
        ]);

        Voucher::factory()->count(10)->create();
        // ganti antara admin, customer, atau worker tapi salah dua harus di komen dulu
        Customer::factory()->count(10)->create();
        // Worker::factory()->count(1)->create();
        // Admin::factory()->count(1)->create();





    }
}
