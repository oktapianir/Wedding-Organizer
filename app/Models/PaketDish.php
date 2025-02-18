<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketDish extends Model
{
    use HasFactory;
    
    protected $table = 'paket_dishes'; // Nama tabel di database
    protected $primaryKey = 'id_dishes'; // Nama primary key
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable = [
        'id_dishes',
        'nama_paket_dish',
        'harga_dish',
        'deskripsi_dish',
        'foto_paket_dish',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($paketDish) {
            // Ambil ID terakhir berdasarkan kolom id_dishes
            $lastPaketDish = PaketDish::orderBy('id_dishes', 'desc')->first();
            $lastId = $lastPaketDish ? intval(substr($lastPaketDish->id_dishes, 2)) : 0;
            
            // Set ID baru dengan format DS0001, DS0002, dst.
            $paketDish->id_dishes = 'DS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
