<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketMakanan extends Model
{
    use HasFactory;

    protected $table = 'paket_maincourse'; // Nama tabel di database
    protected $primaryKey = 'id_mainC'; // Nama primary key
    public $incrementing = false; // Non-auto increment
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable = [
        'id_mainC',
        'nama_paket_mainC',
        'deskripsi_mainC',
        'harga_paket_mainC',
        'foto_paket_mainC',
    ];

    // Fungsi boot untuk mengatur ID secara otomatis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($paketMakanan) {
            // Ambil ID terakhir berdasarkan kolom id_mainC
            $lastPaketMakanan = PaketMakanan::orderBy('id_mainC', 'desc')->first();
            $lastId = $lastPaketMakanan ? intval(substr($lastPaketMakanan->id_mainC, 2)) : 0;
            
            // Set ID baru dengan format MC0001, MC0002, dst.
            $paketMakanan->id_mainC = 'MC' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    // Relasi hasMany ke FotoPaketMaincourse
    public function foto_paket_mainC()
    {
        return $this->hasMany(FotoPaketMaincourse::class, 'mainC_id', 'id_mainC');
    }

    // public function foto_paket_dish()
    // {
    //     return $this->hasMany(FotoPaketDish::class, 'id_dishes', 'id_dishes');
    // }
}

