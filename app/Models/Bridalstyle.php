<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridalstyle extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_bridalstyle'; // Set primary key ke id_gedung
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable = [
        'nama_paket_bridalstyle',
        'deskripsi_paket',
        'harga_paket',
        'foto_paket',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($bridalstyles) {
    //         $lastBridalstyle = Bridalstyle::orderBy('id_bridalstyle', 'desc')->first();
    //         $lastId = $lastBridalstyle ? intval(substr($lastBridalstyle->id_bridalstyle, 3)) : 0;
    //         $bridalstyles->id_bridalstyle = 'BS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
    //     });
    // }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($bridalstyle) {
            $lastBridalstyle = Bridalstyle::orderBy('id_bridalstyle', 'desc')->first();
            $lastId = $lastBridalstyle ? intval(substr($lastBridalstyle->id_bridalstyle, 2)) : 0;
            $newId = 'BS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            
            while (Bridalstyle::where('id_bridalstyle', $newId)->exists()) {
                $lastId++;
                $newId = 'BS' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            // Log the generated ID
            \Log::info("Generated ID: " . $newId);

            $bridalstyle->id_bridalstyle = $newId;
        });
    }

    public function styles()
    {
        return $this->hasOne(Style::class, 'nama_style', 'nama_paket_bridalstyle');
    }

}
