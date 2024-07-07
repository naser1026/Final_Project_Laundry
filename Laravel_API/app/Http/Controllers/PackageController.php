<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function showAllPackage()
    {
        $packages = Package::all();
        if(count($packages) <= 0){
            return response()->json([
                    'msg' =>  'Paket Tidak Ditemukan',
            ], 404);
        }
        return response()->json([
            "data" => [
                'packages' => $packages
            ]
        ], 200);
    }

    public function addPackage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'package_type' => 'required|in:Satuan,Kiloan,Meteran',
            'price' => 'required|numeric|min:0',
            'id_duration' => 'required|exists:durations,id'
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $package = Package::create([
            'name' => $validated['name'],
            'package_type' => $validated['package_type'],
            'price' => $validated['price'],
            'id_duration' => $validated['id_duration'],

        ]);

        return response()->json([
            "data" => [
                'msg' => 'Paket berhasil ditambahkan',
                'package' => $package
            ]
        ]);

    }

    public function updatePackage(Request $request, $id)
    {
        $package = Package::find($id);
        if(!$package){
            return response()->json([
                'msg' => 'Paket tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'package_type' => 'required|in:Satuan,Kiloan,Meteran',
            'price' => 'required|numeric|min:0',
            'id_duration' => 'required|exists:durations,id'
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $package->update([
            'name' => $validated['name'],
            'package_type' => $validated['package_type'],
            'price' => $validated['price'],
            'id_duration' => $validated['id_duration'],
        ]);

        return response()->json([
            'msg' => 'Paket berhasil diupdate',
        ],200);
    }

    public function deletePackage($id)
    {
        $package = Package::find($id);
        if(!$package){
            return response()->json([
                'msg' => 'Paket tidak ditemukan'
            ], 404);
        }
        $package->delete();
        return response()->json([
            'msg' => 'Paket berhasil dihapus',
        ],200);
    }

    public function showPackageByTarget($target, $targetValue)
    {
        $orders = Package::where($target, $targetValue)->get();
        if (!$orders) {
            return response()->json([
                'msg' => 'Layanan tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'msg' => 'Layanan ditemukan',
            'orders' => $orders
        ], 200);
    }

}
