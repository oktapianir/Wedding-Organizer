<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_dokumentasi'; // Set primary key ke id_gedung
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $table = 'dokumentasis'; // Nama tabel di database
    protected $fillable =[
    'id_dokumentasi',
    'nama_paket_dokumentasi',
    'jenis_dokumentasi',
    'deskripsi_dokumentasi',
    'harga_dokumentasi',
    'foto_dokumentasi'
    ];
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($dokumentasis) {
            $lastDokumentasi = Dokumentasi::orderBy('id_dokumentasi', 'desc')->first();
            $lastId = $lastDokumentasi ? intval(substr($lastDokumentasi->id_dokumentasi, 3)) : 0;
            $dokumentasis->id_dokumentasi = 'DOK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function fotoDokumentasi()
    {
        return $this->hasMany(FotoDokumentasi::class, 'dokumentasi_id', 'id_dokumentasi');
    }
     // Relasi ke Pemesanan
     public function pemesanans()
     {
         return $this->hasMany(Pemesanan::class, 'id_dokumentasi', 'id_dokumentasi');
     }
 
     // Relasi pivot untuk detail pemesanan
     public function pemesananDokumentasis()
     {
         return $this->hasMany(PemesananDokumentasi::class, 'id_dokumentasi', 'id_dokumentasi');
     }

}
