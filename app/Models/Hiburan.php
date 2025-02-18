<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiburan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_hiburan'; // Set primary key ke id_gedung
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable = [
        'nama_hiburan',
        'deskripsi_hiburan',
        'harga_hiburan',
        'foto_hiburan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($hiburans) {
            $lastHiburan = Hiburan::orderBy('id_hiburan', 'desc')->first();
            $lastId = $lastHiburan ? intval(substr($lastHiburan->id_hiburan, 2)) : 0;
            $hiburans->id_hiburan = 'HB' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function fotoHiburan()
    {
        return $this->hasMany(FotoHiburan::class, 'hiburan_id', 'id_hiburan');
    }
    public function pemesanans()
      {
          return $this->hasMany(Pemesanan::class, 'id_hiburan', 'id_hiburan');
      }
  
      // Relasi pivot untuk detail pemesanan
      public function pemesananHiburans()
      {
          return $this->hasMany(PemesananHiburan::class, 'id_hiburan', 'id_hiburan');
      }
}