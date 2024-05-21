<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'harga',
        'jarak',
        'catatan',
        'alamat',
        'latitude',
        'longitude',
        'tanggal',
        'waktu'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function tipe_layanan(){
        return $this->belongsTo(TipeLayanan::class, 'tipe_layanan_id');
    }

    public function metode_pembayaran(){
        return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id');
    }
}
