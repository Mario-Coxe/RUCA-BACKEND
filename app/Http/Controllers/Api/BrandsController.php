<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;

class BrandsController extends Controller
{
    public function show($id)
    {
        $brands = Brands::where([
            'id' => $id,
        ])
            ->get();

        if ($brands->count() > 0) {
            return response()->json(['message' => '', 'brands' => $brands], 200);
        } else {
            return response()->json(['message' => 'Marca não encontrada'], 404);
        }
    }

    public function show_all()
    {
        $models = Brands::all();

        if ($models->count() > 0) {
            return response()->json(['message' => '', 'brands' => $models], 200);
        } else {
            return response()->json(['message' => 'Nenhuma marca de combustível encontrado'], 404);
        }
    }
}
