<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekorasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dekorasi'; // Set primary key ke id_gedung
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $table = 'dekorasis'; 
    protected $fillable = [
        'nama_dekorasi',
        'deskripsi_dekorasi',
        'harga_dekorasi',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($dekorasi) {
            $lastDekorasi = Dekorasi::orderBy('id_dekorasi', 'desc')->first();
            $lastId = $lastDekorasi ? intval(substr($lastDekorasi->id_dekorasi, 3)) : 0;
            $dekorasi->id_dekorasi = 'DEK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function fotoDekorasi()
    {
        return $this->hasMany(FotoDekorasi::class, 'dekorasi_id', 'id_dekorasi');
    }

    // public function pemesanans()
    // {
    //     return $this->belongsToMany(Pemesanan::class, 'pemesanan_dekorasis', 'id_dekorasi', 'id_pemesanan')
    //                 ->withPivot('harga_dekorasi');
    // }
    // public function pemesananDekorasi()
    // {
    //     return $this->hasMany(PemesananDekorasi::class, 'id_dekorasi', 'id_dekorasi');
    // }
      // Relasi ke Pemesanan
      public function pemesanans()
      {
          return $this->hasMany(Pemesanan::class, 'id_dekorasi', 'id_dekorasi');
      }
  
      // Relasi pivot untuk detail pemesanan
      public function pemesananDekorasis()
      {
          return $this->hasMany(PemesananDekorasi::class, 'id_dekorasi', 'id_dekorasi');
      }

}
