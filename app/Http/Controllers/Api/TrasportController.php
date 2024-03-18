<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importe a classe Auth
use App\Models\TransportRental;
use App\Models\TransportSale;
use App\Models\Transport;

class TrasportController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados de entrada
        $validatedData = $request->validate([
            'title' => 'required|string',
            'status' => 'required|in:Novo,Usado',
            'type' => 'required|in:Carro,Moto',
            'sale_or_rent' => 'required|in:Venda,Aluguer',
            'user_id' => 'required|int',
            'brand_id' => 'required|int',
            'model_id' => 'required|int',
            'year_id' => 'required|int',
            'fuel_id' => 'required|int',
            'motorization_cc' => 'nullable|string',
            'power_hp' => 'nullable|string',
            'gear_box' => 'nullable|in:Automática,Manual',
            'color_id' => 'required|int',
            'air_conditioning' => 'nullable|in:Automático,Automático multizona,Manual',
            'equipment' => 'nullable|array',
            'security' => 'nullable|array',
            'parking_sensors' => 'nullable|array',
            'airbags' => 'nullable|array',
            'extras' => 'nullable|array',
            'photos' => 'nullable|array',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);

        // Serializa os arrays em strings JSON
        $equipment = json_encode($request->equipment);
        $security = json_encode($request->security);
        $parkingSensors = json_encode($request->parking_sensors);
        $airbags = json_encode($request->airbags);
        $extras = json_encode($request->extras);
        $photos = json_encode($request->photos);

        // Cria um novo transporte com os dados serializados
        $transport = Transport::create([
            'title' => $request->title,
            'status' => $request->status,
            'type' => $request->type,
            'sale_or_rent' => $request->sale_or_rent,
            'user_id' => $request->user_id,
            'brand_id' => $request->brand_id,
            'model_id' => $request->model_id,
            'year_id' => $request->year_id,
            'fuel_id' => $request->fuel_id,
            'motorization_cc' => $request->motorization_cc,
            'power_hp' => $request->power_hp,
            'gear_box' => $request->gear_box,
            'color_id' => $request->color_id,
            'air_conditioning' => $request->air_conditioning,
            'equipment' => $equipment, // Dados serializados
            'security' => $security, // Dados serializados
            'parking_sensors' => $parkingSensors, // Dados serializados
            'airbags' => $airbags, // Dados serializados
            'extras' => $extras, // Dados serializados
            'photos' => $photos, // Dados serializados
            'description' => $request->description,
            'price' => $request->price,
        ]);

        // Resposta de sucesso
        return response()->json(['message' => 'Registro adicionado com sucesso'], 201);
    }
}
