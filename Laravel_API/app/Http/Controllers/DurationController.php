<?php

namespace App\Http\Controllers;

use App\Models\Duration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DurationController extends Controller
{
    public function showAllDuration()
    {
        $durations = Duration::all();
        if($durations->count() <= 0){
            return response()->json([
                    'msg' =>  'Durasi tidak ditemukan'
            ], 404);
        }
        return response()->json([
            "data" => [
                'duration' => $durations
            ]
        ]);
    }

    public function addDuration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'value' => 'required|numeric|min:1|max:200'
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $duration = Duration::create([
            'name' => $validated['name'],
            'value' => $validated['value'],
        ]);
        return response()->json([
            "data" => [
                'msg' =>  'Durasi berhasil ditambahkan',
                'duration' => $duration
            ]
        ], 200);

    }

    public function updateDuration(Request $request, $id)
    {
        $duration = Duration::find($id);
        if(!$duration){
            return response()->json([
                    'msg' =>  'Durasi tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'value' => 'required|numeric|min:1|max:200'
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        $duration->update([
            'name' => $validated['name'],
            'value' => $validated['value'],
        ]);
        return response()->json([
                'msg' =>  'Durasi berhasil diubah',
                'duration' => $duration
        ], 200);

    }

    public function deleteDuration($id)
    {
        $duration = Duration::find($id);
        if(!$duration){
            return response()->json([
                    'msg' =>  'Durasi tidak ditemukan'
            ], 404);
        }
        $duration->delete();
        return response()->json([
                'msg' =>  'Durasi berhasil di hapus'
        ], 200);
    }


}
