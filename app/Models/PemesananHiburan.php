<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananHiburan extends Model
{
    protected $table = 'pemesanan_hiburans'; // Nama tabel pivot
    public $timestamps = true; // Jika ada kolom `created_at` dan `updated_at`
    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id';



    protected $fillable = [
        'id_pemesanan', 
        'id_hiburan', 
        'harga_hiburan'
    ];

        // Relasi ke Pemesanan
        public function pemesanan()
        {
            return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
        }
    
        // Relasi ke Dekorasi
        public function hiburan()
        {
            return $this->belongsTo(Hiburan::class, 'id_hiburan', 'id_hiburan');
        }
    
}
