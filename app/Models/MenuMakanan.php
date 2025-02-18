<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuMakanan extends Model
{
    use HasFactory;
    
    protected $table = 'Menu_makanans'; // Nama tabel di database
    protected $primaryKey = 'id_menu'; // Nama primary key
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable = [
        'id_menu',
        'nama_paket_makanan',
        'nama_makanan',
        'foto_menu_makanan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($MenuMakanan) {
            $lastMenuMakanan = MenuMakanan::orderBy('id_menu', 'desc')->first();
            $lastId = $lastMenuMakanan ? intval(substr($lastMenuMakanan->id_menu, 2)) : 0;
            $MenuMakanan->id_menu = 'MM' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
