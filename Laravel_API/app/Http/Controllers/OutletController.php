<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OutletController extends Controller
{
    public function showAllOutlet()
    {
        $outlets = Outlet::all();
        if($outlets->count() <= 0){
            return response()->json([
                    'msg' =>  'Outlet tidak ditemukan'
            ], 404);
        }
        return response()->json([
            "data" => [
                'outlet' => $outlets
            ]
        ]);
    }

    public function addOutlet(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required|numeric',
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();


        $outlet = Outlet::create([
            'name' => $validated['name'],
            'address' => $validated['address'],
            'phone_number' => $validated['phone_number'],
            'id_owner' => $request->id_owner
        ]);
        return response()->json([
            "data" => [
                'msg' =>  'Outlet berhasil ditambahkan',
                'outlet' => $outlet
            ]
        ], 200);
    }

    public function updateOutlet(Request $request, $id)
    {
        $outlet = Outlet::find($id);
        if(!$outlet){
            return response()->json([
                    'msg' =>  'Outlet tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required|numeric',
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $outlet->update([
            'name' => $validated['name'],
            'address' => $validated['address'],
            'phone_number' => $validated['phone_number'],
            'id_owner' => $request->id_owner
        ]);
        return response()->json([
                'msg' =>  'Outlet berhasil diubah'
        ], 200);
    }

    public function deleteOutlet($id)
    {
        $outlet = Outlet::find($id);
        if(!$outlet){
            return response()->json([
                    'msg' =>  'Outlet tidak ditemukan'
            ], 404);
        }
        $outlet->delete();
        return response()->json([
                'msg' =>  'Outlet berhasil di hapus'
        ], 200);
    }
}
