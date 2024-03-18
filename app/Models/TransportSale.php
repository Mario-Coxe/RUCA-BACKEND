<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportSale extends Model
{
    protected $fillable = [
        'transport_id',
        'price',
        'status',
    ];

    // Relacionamento com o modelo Transport
    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
