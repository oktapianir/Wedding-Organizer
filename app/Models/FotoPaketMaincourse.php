<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPaketMaincourse extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_foto_paket_mainC'; // Primary key untuk FotoPaketMaincourse
    public $incrementing = false; // Non-auto increment
    protected $keyType = 'string'; // Tipe key string

    protected $table = 'foto_paket_maincourse'; 
    protected $fillable = [
        'id_foto_paket_mainC',  // ID unik untuk setiap foto
        'mainC_id',             // Foreign key yang menghubungkan ke paket makanan (PaketMakanan)
        'foto_path',            // Lokasi file foto
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($foto) {
            $lastFoto = FotoPaketMaincourse::orderBy('id_foto_paket_mainC', 'desc')->first();
            $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_paket_mainC, 4)) : 0;
            $newId = 'FMNC' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

            // Memastikan ID baru unik
            while (FotoPaketMaincourse::where('id_foto_paket_mainC', $newId)->exists()) {
                $lastId++;
                $newId = 'FMNC' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            $foto->id_foto_paket_mainC = $newId;
        });
    }

    public function paketMakanan()
    {
        return $this->belongsTo(PaketMakanan::class, 'mainC_id', 'id_mainC'); // Menghubungkan ke model PaketMakanan
    }
}
