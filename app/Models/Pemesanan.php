<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanans';
    protected $primaryKey = 'id_pemesanan';
    public $incrementing = false; // Non-auto-increment
    protected $keyType = 'string';

    protected $fillable = [
        'id_pemesanan', 'id_customer', 'tanggal_pemesanan', 'tanggal_acara', 'id_dekorasi', 'id_hiburan', 'id_dokumentasi', 'id_gedung', 'status_pemesanan', 'nama_pengantin', 'total_biaya', 'nama', 'no_telepon','alamat'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $lastOrder = self::orderBy('id_pemesanan', 'desc')->first();
                $number = $lastOrder ? ((int) substr($lastOrder->id_pemesanan, 3)) + 1 : 1;
                $model->id_pemesanan = 'PSN' . str_pad($number, 4, '0', STR_PAD_LEFT);
            } while (self::where('id_pemesanan', $model->id_pemesanan)->exists());
        });
    }
    
    // Relasi ke tabel histori
    public function histori()
    {
        return $this->hasMany(Histori::class, 'id_pemesanan', 'id_pemesanan');
    }

    // Relasi ke tabel pemesanan_dekorasi
    // public function dekorasi()
    // {
    //     return $this->belongsToMany(Dekorasi::class, 'pemesanan_dekorasi', 'id_pemesanan', 'id_dekorasi')
    //                 ->withPivot('harga_dekorasi');
    // }
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class,'id_pemesanan', 'id_pemesanan');
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class,'id_customer', 'id');
    // }
    // public function testimoni()
    // {
    //     return $this->hasOne(Testimoni::class, 'id_pemesanan');
    // }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // Relasi ke model Testimoni
    public function testimonis()
    {
        return $this->hasMany(Testimoni::class, 'id_pemesanan', 'id_pemesanan');
    }

    // public function dekorasi()
    // {
    //     return $this->belongsToMany(Dekorasi::class, 'pemesanan_dekorasis', 'id_pemesanan', 'id_dekorasi')
    //                 ->withPivot('harga_dekorasi');
    // }
    public function dekorasi()
    {
        return $this->belongsTo(Dekorasi::class, 'id_dekorasi', 'id_dekorasi');
    }

    public function pemesananDekorasis()
    {
        return $this->hasMany(PemesananDekorasi::class, 'id_pemesanan', 'id_pemesanan');
    }

    public function hiburan()
    {
        return $this->belongsTo(Hiburan::class, 'id_hiburan', 'id_hiburan');
    }
    public function pemesananHiburans()
    {
        return $this->hasMany(PemesananHiburan::class, 'id_pemesanan', 'id_pemesanan');
    }

    public function dokumentasi()
    {
        return $this->belongsTo(Dokumentasi::class, 'id_dokumentasi', 'id_dokumentasi');
    }
    public function pemesananDokumentasis()
    {
        return $this->hasMany(PemesananDokumentasi::class, 'id_pemesanan', 'id_pemesanan');
    }
    
    public function undangan() {
        return $this->belongsToMany(Undangan::class, 'pemesanan_undangan')->withPivot('harga_undangan');
    }

    public function pemesananGedung()
    {
        return $this->hasMany(PemesananGedung::class, 'id_pemesanan', 'id_pemesanan');
    }

    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'id_gedung');
    }


}

