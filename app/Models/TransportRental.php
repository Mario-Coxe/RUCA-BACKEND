<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportRental extends Model
{
    protected $fillable = [
        'transport_id',
        'rental_time',
        'rental_start_date',
        'rental_end_date',
      //  'price',
        'status',
    ];

    // Relacionamento com o modelo Transport
    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
