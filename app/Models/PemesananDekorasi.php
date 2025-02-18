<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananDekorasi extends Model
{
    protected $table = 'pemesanan_dekorasis'; // Nama tabel pivot
    public $timestamps = true; // Jika ada kolom `created_at` dan `updated_at`
    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id';



    protected $fillable = [
        'id_pemesanan', 
        'id_dekorasi', 
        'harga_dekorasi'
    ];

    // // Relasi ke tabel Pemesanan
    // public function pemesanan()
    // {
    //     return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    // }

    // // Relasi ke tabel Dekorasi
    // public function dekorasi()
    // {
    //     return $this->belongsTo(Dekorasi::class, 'id_dekorasi', 'id_dekorasi');
    // }
        // Relasi ke Pemesanan
        public function pemesanan()
        {
            return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
        }
    
        // Relasi ke Dekorasi
        public function dekorasi()
        {
            return $this->belongsTo(Dekorasi::class, 'id_dekorasi', 'id_dekorasi');
        }
    
}
