<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\fotoGedung; 


class Gedung extends Model
{
    protected $primaryKey = 'id_gedung'; // Set primary key ke id_gedung
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $table = 'gedung'; // Pastikan nama tabel benar
    protected $fillable = [
        'id_gedung', // Tambahkan id_gedung ke fillable
        'nama_gedung',
        'tipe_gedung',
        'alamat_gedung',
        'kapasitas_gedung',
        'harga_gedung',
        'status_gedung',
        'deskripsi_gedung',
        'foto_gedung',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gedung) {
            $lastGedung = Gedung::orderBy('id_gedung', 'desc')->first();
            $lastId = $lastGedung ? intval(substr($lastGedung->id_gedung, 2)) : 0;
            $gedung->id_gedung = 'GD' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function fotoGedung()
    {
        return $this->hasMany(FotoGedung::class, 'gedung_id', 'id_gedung');
    }
}
