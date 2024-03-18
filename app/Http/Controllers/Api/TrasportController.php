<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TransportRental;
use App\Models\TransportSale;

class TrasportController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados de entrada
        $validatedData = $request->validate([
            'sale_or_rent' => 'required|in:Venda,Aluguer',
            // Outras regras de validação...
        ]);

        // Criação de uma nova instância do modelo de acordo com a escolha
        if ($validatedData['sale_or_rent'] === 'Aluguer') {
            $transportRental = new TransportRental();
            $transportRental->rental_time = $request->rental_time;
            $transportRental->rental_start_date = $request->rental_start_date;
            $transportRental->rental_end_date = $request->rental_end_date;
            $transportRental->price = $request->price;
            // Outros campos...

            // Salva o novo aluguel
            $transportRental->save();
        } elseif ($validatedData['sale_or_rent'] === 'Venda') {
            $transportSale = new TransportSale();
            $transportSale->price = $request->price;
            // Outros campos...

            // Salva a nova venda
            $transportSale->save();
        }

        // Resposta de sucesso
        return response()->json(['message' => 'Registro adicionado com sucesso'], 201);
    }
}
