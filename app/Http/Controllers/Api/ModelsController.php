<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Models;

class ModelsController extends Controller
{

    public function show($brand)
    {
        $models = Models::where([
            'brand_id' => $brand,
        ])
            ->with('brands')
            ->get();

        if ($models->count() > 0) {
            return response()->json(['message' => '', 'models' => $models], 200);
        } else {
            return response()->json(['message' => 'Modelos não encontrados'], 404);
        }
    }
}
