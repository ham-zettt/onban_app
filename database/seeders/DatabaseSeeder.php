<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\MetodePembayaran;
use App\Models\Pekerja;
use App\Models\Pengguna;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use App\Models\StatusPenerimaanWorker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Admin::factory(10)->create();
        // Pekerja::factory(10)->create();
        // Pengguna::factory(10)->create();

        StatusPenerimaanWorker::create([
            'status_penerimaan' => true,
            'keterangan' => 'ditutup sampai 23 Mei 2024',
        ]);

        MetodePembayaran::create([
            'nama_metode_pembayaran' => 'Bayar di Tempat',
            'deskripsi_metode_pembayaran' => 'Pembayaran dilakukan di tempat',
        ]);

        // $login = DB::table('login')->insertGetId([
        //     "username" => "admin",
        // ]);
    }
}
