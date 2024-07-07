<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CashierController extends Controller
{
    public function showAllCashier()
    {
        $cashiers = Cashier::all();
        if($cashiers->count() <= 0){
            return response()->json([
                    'msg' =>  'Kasir tidak ditemukan'
            ], 404);
        }
        return response()->json([
            "data" => [
                'msg' =>  'Kasir ditemukan',
                'cashier' => $cashiers
            ]
        ]);
    }

    public function addCashier(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        while(true) {
            $id_cashier = "NAM-".rand(100000, 999999);
            if(!Cashier::where('id_cashier', $id_cashier)->exists()){
                break;
            }
        }

        $cashier = Cashier::create([
            'id_cashier' => $id_cashier,
            'name' => $validated['name'],
        ]);

        return response()->json([
            "data" => [
                'msg' =>  'Kasir berhasil ditambahkan',
                'cashier' => $cashier
            ]
        ], 200);
    }

    public function updateCashier(Request $request, $id)
    {
        $cashier = Cashier::find($id);
        if(!$cashier){
            return response()->json([
                    'msg' =>  'Kasir tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();
        $cashier->update([
            'name' => $validated['name'],
            'id_cashier' => $cashier->id_cashier,
        ]);
        return response()->json([
                'msg' =>  'Kasir berhasil diubah',
                'cashier' => $cashier
        ], 200);
    }

    public function deleteCashier($id)
    {
        $cashier = Cashier::find($id);
        if(!$cashier){
            return response()->json([
                    'msg' =>  'Kasir tidak ditemukan'
            ], 404);
        }
        $cashier->delete();
        return response()->json([
                'msg' =>  'Kasir berhasil di hapus'
        ], 200);
    }

}
