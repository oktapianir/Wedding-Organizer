<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSouvenir extends Model
{
    use HasFactory;
    
    protected $table = 'Paket_souvenirs'; // Nama tabel di database
    protected $primaryKey = 'id_paket_souvenir'; // Nama primary key
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable = [
        'id_paket_souvenir',
        'nama_paket_souvenir',
        'deskripsi_souvenir',
        'harga_souvenir',
        'foto_souvenir',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($paketSouvenir) {
            $lastPaketSouvenir = PaketSouvenir::orderBy('id_paket_souvenir', 'desc')->first();
            $lastId = $lastPaketSouvenir ? intval(substr($lastPaketSouvenir->id_paket_souvenir, 2)) : 0;
            $paketSouvenir->id_paket_souvenir = 'PS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function fotoSouvenir()
    {
        return $this->hasMany(FotoSouvenir::class, 'souvenir_id', 'id_paket_souvenir');
    }
}
