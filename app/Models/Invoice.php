<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Invoice extends Model
{
    // Gunakan id_inv sebagai primary key
    protected $primaryKey = 'id_inv';

    // Nonaktifkan increment jika id_inv bukan auto-increment
    public $incrementing = false;

    // Tentukan tipe primary key 
    protected $keyType = 'string';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_inv',
        'id_pemesanan', 
        'id_customer'
    ];

    // Nonaktifkan timestamps
    public $timestamps = false;

     // Boot method to generate ID before creating
     protected static function boot()
     {
         parent::boot();
 
         // Generate unique ID before creating the model
         static::creating(function ($model) {
             if (empty($model->{$model->getKeyName()})) {
                 $model->{$model->getKeyName()} = $model->generateUniqueInvoiceId();
             }
         });
     }
 
     // Method to generate unique invoice ID
     public function generateUniqueInvoiceId()
     {
         do {
             // Generate a random prefix 'INV'
             $prefix = 'INV';
             
             // Generate a random string of 6 characters (numbers and uppercase letters)
             $randomPart = strtoupper(Str::random(6));
             
             // Combine prefix and random part
             $invoiceId = $prefix . $randomPart;
         } 
         // Ensure the generated ID is unique in the invoices table
         while (self::where('id_inv', $invoiceId)->exists());
 
         return $invoiceId;
     }
}


