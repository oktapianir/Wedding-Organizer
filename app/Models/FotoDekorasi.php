<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoDekorasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_foto_dekorasi'; // Primary key untuk FotoDekorasi
    public $incrementing = false; // Non-auto increment
    protected $keyType = 'string'; // Tipe key string

    protected $table = 'foto_dekorasis'; 
    protected $fillable = [
        'id_foto_dekorasi',  // ID unik untuk setiap foto
        'dekorasi_id',       // Foreign key yang menghubungkan ke dekorasi
        'foto_path',         // Lokasi file foto
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($foto) {
            $lastFoto = FotoDekorasi::orderBy('id_foto_dekorasi', 'desc')->first();
            $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_dekorasi, 3)) : 0;
            $newId = 'FDEK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

            // Memastikan ID baru unik
            while (FotoDekorasi::where('id_foto_dekorasi', $newId)->exists()) {
                $lastId++;
                $newId = 'FDEK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            $foto->id_foto_dekorasi = $newId;
        });
    }

    // protected static function boot()
    // {-
    //     parent::boot();

    //     static::creating(function ($foto) {
    //         $lastFoto = FotoDekorasi::orderBy('id_foto_dekorasi', 'desc')->first();
    //         $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_dekorasi, 3)) : 0;
    //         $foto->id_foto_dekorasi = 'FDEK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
    //     });
    // }

    public function dekorasi()
    {
        return $this->belongsTo(Dekorasi::class, 'dekorasi_id', 'id_dekorasi');
    }
}
