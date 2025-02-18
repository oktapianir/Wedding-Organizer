<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_undangan'; // Set primary key ke id_gedung
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable =[
    'id_undangan',
    'nama_undangan',
    'bahan_undangan',
    'deskripsi_undangan',
    'harga_undangan',
    'foto_undangan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($undangans) {
            $lastUndangan = Undangan::orderBy('id_undangan', 'desc')->first();
            $lastId = $lastUndangan ? intval(substr($lastUndangan->id_undangan, 2)) : 0;
            $undangans->id_undangan = 'UD' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }
    public function fotoUndangan()
    {
        return $this->hasMany(fotoUndangan::class, 'undangan_id', 'id_undangan');
    }
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_undangan', 'id_undangan');
    }

    // Relasi pivot untuk detail pemesanan
    public function pemesananUndangans()
    {
        return $this->hasMany(PemesananUndangan::class, 'id_undangan', 'id_undangan');
    }
}
