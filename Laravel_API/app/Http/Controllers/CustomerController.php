<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Custumer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function showAllCustumer()
    {
        $customers = Custumer::all();

        if($customers->count() <= 0){
            return response()->json([
                    'msg' =>  'Pelanggan tidak ditemukan'
            ], 404);

        }

        return response()->json([
            "data" => [
                'msg' => 'Pelanggan ditemukan',
                'customers' => $customers
            ]
        ], 200);

    }

    public function addCustumer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required|numeric|unique:custumers,phone_number',
            'created_by' => 'required|exists:users,id'
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $customer = Custumer::create([
            'name' => $validated['name'],
            'phone_number' => $validated['phone_number'],
            'created_by' => $validated['created_by']
        ]);

        return response()->json([
            "data" => [
                'msg' => 'Pelanggan berhasil ditambahkan',
            ]
        ], 200);

    }
    public function updateCustumer(Request $request, $id)
    {
        $customer = Custumer::find($id);
        if(!$customer){
            return response()->json([
                    'msg' =>  'Pelanggan tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required|numeric|unique:custumers,phone_number,'.$customer->id,
            'created_by' => 'required|exists:users,id'
        ]);
        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();
        $customer->update([
            'name' => $validated['name'],
            'phone_number' => $validated['phone_number'],
            'created_by' => $validated['created_by']
        ]);
        return response()->json([
            "data" => [
                'msg' => 'Pelanggan berhasil diupdate',
            ]
        ], 200);

    }

    public function deleteCustumer($id)
    {
        $customer = Custumer::find($id);
        if(!$customer){
            return response()->json([
                    'msg' =>  'Pelanggan tidak ditemukan'
            ], 404);
        }
        $customer->delete();
        return response()->json([
            "data" => [
                'msg' => 'Pelanggan berhasil dihapus',
            ]
        ], 200);
    }
}
