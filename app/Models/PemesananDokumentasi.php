<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananDokumentasi extends Model
{
    protected $table = 'pemesanan_dokumentasis'; // Nama tabel pivot
    public $timestamps = true; // Jika ada kolom `created_at` dan `updated_at`
    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id';



    protected $fillable = [
        'id_pemesanan', 
        'id_dokumentasi', 
        'harga_dokumentasi'
    ];

        // Relasi ke Pemesanan
        public function pemesanan()
        {
            return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
        }
    
        // Relasi ke dokumentasi
        public function dokumentasi()
        {
            return $this->belongsTo(Dokumentasi::class, 'id_dokumentasi', 'id_dokumentasi');
        }
    
}
