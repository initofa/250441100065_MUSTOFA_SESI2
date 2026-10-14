<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'nama_menu',
        'jenis',
        'harga',
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }
}
