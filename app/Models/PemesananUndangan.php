<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananUndangan extends Model
{
    protected $table = 'pemesanan_undangans'; // Nama tabel pivot
    public $timestamps = true; // Jika ada kolom `created_at` dan `updated_at`
    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id';



    protected $fillable = [
        'id_pemesanan', 
        'id_undangan', 
        'harga_undangan'
    ];

        // Relasi ke Pemesanan
        public function pemesanan()
        {
            return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
        }
    
        // Relasi ke Dekorasi
        public function undangan()
        {
            return $this->belongsTo(Undangan::class, 'id_undangan', 'id_undangan');
        }
    
}
