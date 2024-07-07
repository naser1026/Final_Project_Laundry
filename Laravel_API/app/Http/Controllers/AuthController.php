<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();

        if(Auth::attempt($validated)) {
            $user = Auth::user();

            $payload = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
                'iat' => now()->timestamp,
                'exp' => now()->timestamp + 7200
            ];

            $token = JWT::encode($payload, env('JWT_SECRET'), 'HS256');
            return response()->json([
                "data" => [
                    'msg' => 'Login berhasil',
                    'token' => "Bearer {$token}"
                ]
            ]);
        }

        return response()->json([
                'msg' =>  'Login gagal, email atau password salah'
        ], 401);

    }

    public function loginCashier(Request $request) {
        $validator = Validator::make($request->all(), [
            'id_cashier' => 'required',
        ]);

        if($validator->fails()){
             return response()->json($validator->messages(), 400);
        }

        $validated = $validator->validated();

        $cashier = Cashier::where('id_cashier', $validated['id_cashier'])->first();
        if($cashier) {
            $payload = [
                'name' => $cashier->name,
                'id_cashier' => $cashier->id_cashier,
                'iat' => now()->timestamp,
                'exp' => now()->timestamp + 7200
            ];

            $token = JWT::encode($payload, env('JWT_SECRET'), 'HS256');
            return response()->json([
                "data" => [
                    'msg' => 'Kasir berhasil login',
                    'token' => "Bearer {$token}"
                ]
            ]);
        }
    }
}
