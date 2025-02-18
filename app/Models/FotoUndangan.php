<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoUndangan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_foto_undangan'; // Primary key untuk FotoDekorasi
    public $incrementing = false; // Non-auto increment
    protected $keyType = 'string'; // Tipe key string

    protected $table = 'foto_undangans'; 
    protected $fillable = [
        'id_foto_undangan',  // ID unik untuk setiap foto
        'undangan_id',       // Foreign key yang menghubungkan ke dekorasi
        'foto_path',         // Lokasi file foto
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($foto) {
            $lastFoto = FotoUndangan::orderBy('id_foto_undangan', 'desc')->first();
            $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_undangan, 3)) : 0;
            $newId = 'FUND' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

            // Memastikan ID baru unik
            while (FotoUndangan::where('id_foto_undangan', $newId)->exists()) {
                $lastId++;
                $newId = 'FUND' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            $foto->id_foto_undangan = $newId;
        });
    }

    public function undangan()
    {
        return $this->belongsTo(Undangan::class, 'undangan_id', 'id_undangan');
    }
}
