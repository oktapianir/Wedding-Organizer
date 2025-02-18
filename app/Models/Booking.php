<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_booking',
        'id_customer',
        'gedung',
        'dekorasi',
        'katering',
        'hiburan',
        'dokumentasi',
        'makeup',
        'souvenir',
        'undangan',
        'tanggal_booking',
        'tanggal_acara',
        'total_biaya',
        'status_booking'
    ];
}
