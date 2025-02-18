<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_style'; // Set primary key ke id_gedung
    public $incrementing = false; // Nonaktifkan auto-incrementing
    protected $keyType = 'string'; // Set key type ke string

    protected $fillable = [
        'nama_style',
        'foto_style',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($styles) {
            $lastStyle = Style::orderBy('id_style', 'desc')->first();
            $lastId = $lastStyle ? intval(substr($lastStyle->id_style, 2)) : 0;
            $newId = 'S' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            
            while (Style::where('id_style', $newId)->exists()) {
                $lastId++;
                $newId = 'S' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            }

            // Log the generated ID
            \Log::info("Generated ID: " . $newId);

            $styles->id_style = $newId;
        });
    }
        // Mengonversi kolom 'foto_styles' menjadi array secara otomatis
        protected $casts = [
            'foto_styles' => 'array',
        ];

}
