<?php

namespace App\Http\Controllers;

use App\Models\Parfum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParfumController extends Controller
{
    public function showAllParfum()
    {
        $parfums = Parfum::all();
        if($parfums->count() <= 0){
            return response()->json([
                    'msg' =>  'Parfum tidak ditemukan'
            ], 404);
        }

        return response()->json([
            "data" => [
                'msg' => 'Parfum ditemukan',
                "parfums" => $parfums
            ]
        ]);
    }
    public function addParfum(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $parfum = Parfum::create([
            'name' => $validated['name'],
        ]);

        return response()->json([
            "data" => [
                'msg' => 'Parfum berhasil ditambahkan',
                'parfum' => $parfum
            ]
        ]);


    }
    public function updateParfum(Request $request, $id)
    {
        $parfum = Parfum::find($id);
        if(!$parfum){
            return response()->json([
                'msg' => 'Parfum tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $parfum->update([
            'name' => $validated['name'],
        ]);

        return response()->json([
            "data" => [
                'msg' => 'Parfum berhasil diupdate',
                'parfum' => $parfum
            ]
        ], 200);

    }
    public function deleteParfum($id)
    {
        $parfum = Parfum::find($id);
        if(!$parfum){
            return response()->json([
                'msg' => 'Parfum tidak ditemukan'
            ], 404);
        }
        $parfum->delete();
        return response()->json([
            'msg' => 'Parfum berhasil dihapus'
        ], 200);

    }
}
