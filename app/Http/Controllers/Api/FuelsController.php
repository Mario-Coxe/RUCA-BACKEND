<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fuel;

class FuelsController extends Controller
{
    public function show_all()
    {
        $models = Fuel::all();

        if ($models->count() > 0) {
            return response()->json(['message' => '', 'models' => $models], 200);
        } else {
            return response()->json(['message' => 'Nenhum modelo de combustível encontrado'], 404);
        }
    }
}
