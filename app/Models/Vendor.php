<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    // Tentukan nama tabel jika bukan bentuk jamak dari nama model
    // protected $table = 'vendors';
    protected $primaryKey = 'custom_id'; //menggunkn custom_id sebagai primary key
    public $incrementing = false; //non-incrementing
    protected $keyType = 'string'; // tipe data string untuk primary key 

    protected $fillable =['custom_id','name','vendor_type',
    'nama',
    'alamat',
    'email',
    'no_telepon',
    'penanggung_jawab',
    // 'harga',
    // 'deskripsi',
    'image',
    // 'kapasitas',
    // 'status',
    // 'jenis_dokumentasi',
    // 'jenis_undangan',
    // 'bahan_undangan'];
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($vendor){
            //memnentukan prefix berdasarkan type_vendor
            $prefix = match($vendor->vendor_type){
                'Gedung' => 'G',
                'Katering' => 'K',
                'Dekorasi' => 'D',
                'Dokumentasi' => 'DK',
                'Hiburan' => 'H',
                'Mua' => 'M',
                'Undangan' => 'U',
                'Souvenir' => 'S',
                'default' => 'O',// jika kvendor_type tidak sesuai,gunakan preffix deafault
            };
            //mendpatkn ID terakhir dri tabel vendors berdasrkn custom_id
            $lastvendor = Vendor::where('vendor_type', $vendor->vendor_type)
                                ->orderBy('custom_id', 'desc')
                                ->first();

            //memisahkan angka dari custom_id terakhir
            $lastId = $lastvendor ? intval(substr($lastvendor->custom_id, 1)) : 0;

            //membuat custom ID dengan format KD001, KD002, dst
            $vendor->custom_id = $prefix . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
    
            //

        });
    }

    // Tentukan kolom yang bisa diisi secara massal
    // protected $fillable = [
    //     'vendor_type',
    //     'nama',
    //     'alamat',
    //     'email',
    //     'no_telepon',
    //     'penanggung_jawab',
    //     'harga',
    //     'deskripsi',
    //     'image',
    //     'kapasitas',
    //     'status',
    //     'jenis_dokumentasi',
    //     'jenis_undangan',
    //     'bahan_undangan'
    // ];

}
