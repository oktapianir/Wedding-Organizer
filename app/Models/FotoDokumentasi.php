<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoDokumentasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_foto_dokumentasi'; // Primary key untuk FotoDekorasi
    public $incrementing = false; // Non-auto increment
    protected $keyType = 'string'; // Tipe key string

    protected $table = 'foto_dokumentasis'; 
    protected $fillable = [
        'id_foto_dokumentasi',  // ID unik untuk setiap foto
        'dokumentasi_id',       // Foreign key yang menghubungkan ke dekorasi
        'foto_path',         // Lokasi file foto
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($foto) {
            $lastFoto = fotoDokumentasi::orderBy('id_foto_dokumentasi', 'desc')->first();
            $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_dokumentasi, 3)) : 0;
            $newId = 'FDOK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

            // Memastikan ID baru unik
            while (fotoDokumentasi::where('id_foto_dokumentasi', $newId)->exists()) {
                $lastId++;
                $newId = 'FDOK' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            $foto->id_foto_dokumentasi = $newId;
        });
    }

    public function dokumentasi()
    {
        return $this->belongsTo(Dokumentasi::class, 'dokumentasi_id', 'id_dokumentasi');
    }
}
