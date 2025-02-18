<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoSouvenir extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_foto_souvenir'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $table = 'foto_souvenirs'; 
    protected $fillable = [
        'id_foto_souvenir',  
        'souvenir_id',       
        'foto_path',     
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($foto) {
            $lastFoto = FotoSouvenir::orderBy('id_foto_souvenir', 'desc')->first();
            $lastId = $lastFoto ? intval(substr($lastFoto->id_foto_souvenir, 3)) : 0;
            $newId = 'FSOUV' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);

            // Memastikan ID baru unik
            while (FotoSouvenir::where('id_foto_souvenir', $newId)->exists()) {
                $lastId++;
                $newId = 'FSOUV' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            $foto->id_foto_souvenir = $newId;
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

    public function paketsouvenir()
    {
        return $this->belongsTo(PaketSouvenir::class, 'souvenir_id', 'id_paket_souvenir');
    }
}
