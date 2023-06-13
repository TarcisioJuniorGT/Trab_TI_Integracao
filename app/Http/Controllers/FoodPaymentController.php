<?php

namespace App\Http\Controllers;

use App\Models\FoodPayment;
use Illuminate\Http\Request;

class FoodPaymentController extends Controller
{

    public function index()
    {
        return FoodPayment::all();
    }

    public function show($id)
    {
        $model = FoodPayment::find($id);
        if ($model) {
            return $model;
        } else {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }
    }

    public function update(Request $request,  $id)
    {
        $model = FoodPayment::find($id);
        if ($model) {
            $data = $request->all();
            $model->update($data);
            return response()->json(['success' => 'Atualizacao de "Alimentação registrado com sucesso.'], 200);
        } else {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }
    }

    public function destroy($id)
    {
        $model = FoodPayment::find($id);
        if ($model) {
            $model->delete();
            return response()->json(['success' => 'Registro de "Alimentação deletado com sucesso.'], 200);
        } else {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $model = FoodPayment::create($data);
        return response()->json([
            'success' => 'Pagamento de "Alimentação registrado com sucesso.',
            'data' => $model
        ], 200);
    }
}
