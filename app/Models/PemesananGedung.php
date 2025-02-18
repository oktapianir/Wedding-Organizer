<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananGedung extends Model
{
    protected $table = 'pemesanan_gedung';

    protected $fillable = ['id_gedung', 'id_pemesanan', 'tanggal_acara', 'kapasitas','harga_gedung'];

    // Relasi dengan model Gedung
    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'id_gedung');
    }
     public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }
}
