<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimonis';  // Pastikan nama tabel sesuai
    protected $primaryKey = 'id';  // Pastikan primary key adalah 'id'
    public $incrementing = true;  // Pastikan auto-increment aktif untuk 'id'
    protected $fillable = ['id_cust', 'nama', 'id_pemesanan', 'testimoni', 'rating'];
     // Relasi ke model Pemesanan
     public function pemesanan()
     {
         return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
     }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'id_cust');
    // }

    // public function pemesanan()
    // {
    //     return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    // }
}



