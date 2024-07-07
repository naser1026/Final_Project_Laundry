<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiscountController extends Controller
{
    public function showAllDiscount()
    {
        $discounts = Discount::all();

        if(count($discounts) <= 0) {
            return response()->json([
                    'msg' =>  'Diskon tidak ditemukan'
            ], 404);
        }

        return response()->json([
            "data" => [
                'discounts' => $discounts
            ]
        ]);
    }

    public function addDiscount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'discount_type' => 'required|in:fixed,percentage',
            'value' => 'required|numeric',
        ]);
        $validator->sometimes('value', 'min:1|max:100', function ($input) {
            return $input->discount_type == 'percentage';
        });
        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $discount = Discount::create([
            'discount_type' => $validated['discount_type'],
            'value' => $validated['value'],

        ]);

        return response()->json([
            "data" => [
                'msg' => 'Diskon ditambahkan',
                'discount' => $discount
            ]
        ]);

    }

    public function updateDiscount(Request $request, $id)
    {
        $discount = Discount::find($id);
        if(!$discount) {
            return response()->json([
                'msg' => 'Diskon tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'discount_type' => 'in:fixed,percentage',
            'value' => 'numeric',
        ]);
        $validator->sometimes('value', 'min:1|max:100', function ($input) {
            return $input->discount_type == 'percentage';
        });

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();


        $discount->update([
            'discount_type' => $validated['discount_type'],
            'value' => $validated['value'],

        ]);
        return response()->json([
            'msg' => 'Diskon berhasil diperbarui',
            'discount' => $discount
        ], 200);
    }

    public function deleteDiscount($id)
    {
        $discount = Discount::find($id);
        if(!$discount) {
            return response()->json([
                'msg' => 'Diskon tidak ditemukan'
            ], 404);
        }
        $discount->delete();
        return response()->json([
            'msg' => 'Diskon berhasil dihapus'
        ], 200);
    }
}
