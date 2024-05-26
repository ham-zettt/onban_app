<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'id_order';

    protected $guarded = [
        "id_order"
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function worker(){
        return $this->belongsTo(Worker::class, 'worker_id');
    }

    public function tipe_layanan(){
        return $this->belongsTo(TipeLayanan::class, 'tipe_layanan_id');
    }

    public function ulasan(){
        return $this->hasOne(Ulasan::class, 'order_id');
    }

    public function voucher(){
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }






}
