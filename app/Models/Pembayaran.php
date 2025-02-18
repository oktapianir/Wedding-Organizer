<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pembayaran'; // Menentukan primary key custom
    public $incrementing = false; // Jika 'id_pembayaran' tidak auto-increment
    protected $fillable = [
        'id_pembayaran', 
        'pemesanan_id', 
        'jumlah_pembayaran', 
        'bukti_pembayaran'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Menghasilkan ID pembayaran dengan format tertentu
            do {
                $lastPayment = self::orderBy('id_pembayaran', 'desc')->first();
                $number = $lastPayment ? ((int) substr($lastPayment->id_pembayaran, 3)) + 1 : 1;
                $model->id_pembayaran = 'PYM' . str_pad($number, 4, '0', STR_PAD_LEFT);
            } while (self::where('id_pembayaran', $model->id_pembayaran)->exists());
        });
    }

    // Definisikan relasi ke model Pemesanan
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }
    
}
