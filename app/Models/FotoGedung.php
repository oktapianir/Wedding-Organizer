<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gedung; 

class FotoGedung extends Model
{

    protected $primaryKey = 'id_foto_gedung'; // Primary key untuk FotoDekorasi
    public $incrementing = false; // Non-auto increment
    protected $keyType = 'string'; // Tipe key string

    protected $table = 'foto_gedungs'; 
    protected $fillable = [
        'id_foto_gedung',  // ID unik untuk setiap foto
        'gedung_id',       // Foreign key yang menghubungkan ke dekorasi
        'foto_path',         // Lokasi file foto
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($foto) {
            $lastFoto = fotoGedung::orderBy('id_foto_gedung', 'desc')->first();
            $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_gedung, 3)) : 0;
            $newId = 'FGED' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

            // Memastikan ID baru unik
            while (fotoGedung::where('id_foto_gedung', $newId)->exists()) {
                $lastId++;
                $newId = 'FGED' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            $foto->id_foto_gedung = $newId;
        });
    }

    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'gedung_id', 'id_gedung');
    }
}
