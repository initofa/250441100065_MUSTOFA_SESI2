<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
       use HasFactory;

    protected $table = 'pesanans';

    protected $fillable = [
        'menu_id',
        'nama_pelanggan',
        'nomer_meja',
        'jumlah',
        'totla_harga',
        'status',
    ];

    public function menu()
    {
        return $this->belongsTo(menu::class);
    }
}
