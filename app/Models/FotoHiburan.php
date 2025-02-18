<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoHiburan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_foto_hiburan'; // Primary key untuk FotoDekorasi
    public $incrementing = false; // Non-auto increment
    protected $keyType = 'string'; // Tipe key string

    protected $table = 'foto_hiburans'; 
    protected $fillable = [
        'id_foto_hiburan',  // ID unik untuk setiap foto
        'hiburan_id',       // Foreign key yang menghubungkan ke dekorasi
        'foto_path',         // Lokasi file foto
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($foto) {
            $lastFoto = fotoHiburan::orderBy('id_foto_hiburan', 'desc')->first();
            $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_hiburan, 3)) : 0;
            $newId = 'FHIB' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

            // Memastikan ID baru unik
            while (fotoHiburan::where('id_foto_hiburan', $newId)->exists()) {
                $lastId++;
                $newId = 'FHIB' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            $foto->id_foto_hiburan = $newId;
        });
    }

    public function hiburan()
    {
        return $this->belongsTo(Hiburan::class, 'hiburan_id', 'id_hiburan');
    }
}
