<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class Histori extends Model
{
    use HasFactory;

    protected $table = 'historis'; // Nama tabel sesuai database
    protected $primaryKey = 'id_histori';
    public $incrementing = false; // Non-auto-increment
    protected $keyType = 'string'; // Tipe ID sebagai string

    protected $fillable = [
        'id_histori', 'id_customer', 'id_pemesanan', 'tanggal_pemesanan', 'status_pemesanan'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil histori terakhir
            $lastOrder = self::orderBy('id_histori', 'desc')->first();

            // Jika tidak ada histori terakhir, mulai dari 1
            $number = $lastOrder ? ((int) substr($lastOrder->id_histori, 3)) + 1 : 1;
            
            // Buat ID baru dengan format HIS001, HIS002, dst.
            $model->id_histori = 'HIS' . str_pad($number, 3, '0', STR_PAD_LEFT);
        });
        
    }   

    // Relasi ke tabel pemesanans
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_customer', 'id');
    }
}
