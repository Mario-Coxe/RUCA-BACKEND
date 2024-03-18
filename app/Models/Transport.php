<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{

    protected $table = 'transport';

    protected $fillable = [
        'id',
        'title',
        'status',
        'type',
        'price',
        'sale_or_rent',
        'user_id',
        'brand_id',
        'model_id',
        'year_id',
        'fuel_id',
        'motorization_cc',
        'power_hp',
        'gear_box',
        'color_id',
        'air_conditioning',
        'equipment',
        'security',
        'parking_sensors',
        'airbags',
        'extras',
        'photos',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();

        // Adiciona um evento de criação para criar transport_sale e transport_rental após a criação do transporte
        static::created(function ($transport) {
            if ($transport->sale_or_rent === 'Venda') {
                $transportSale = new TransportSale([
                    'transport_id' => $transport->id
                    // Outros atributos do TransportSale
                ]);
                $transportSale->save();
            } elseif ($transport->sale_or_rent === 'Aluguer') {
                $transportRental = new TransportRental([
                    'transport_id' => $transport->id
                    // Outros atributos do TransportRental
                ]);
                $transportRental->save();
            }
        });
    }

    // Relacionamento com o usuário (um transporte pertence a um usuário)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com a marca do transporte
    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }

    // Relacionamento com o modelo do transporte
    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    // Relacionamento com o ano do transporte
    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    // Relacionamento com o tipo de combustível do transporte
    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    // Relacionamento com a cor do transporte
    public function color()
    {
        return $this->belongsTo(Colors::class);
    }

    // Relacionamento com rentals (aluguéis)
    public function rentals()
    {
        return $this->hasMany(TransportRental::class);
    }

    // Relacionamento com sales (vendas)
    public function sales()
    {
        return $this->hasMany(TransportSale::class);
    }
}
