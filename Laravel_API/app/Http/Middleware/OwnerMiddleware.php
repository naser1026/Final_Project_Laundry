<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Firebase\JWT\Key;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;

class OwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $token = $request->bearerToken();
            if($token == null or $token == ""){
                return response()->json([
                    'msg' =>  'Akses ditolak, token harus di isi'
                ], 401);
            }
            $decoded = JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));

            if($decoded->role == 'owner'){
                $request['id_owner'] = $decoded->id;;
                return $next($request);
            }else{
                return response()->json([
                    'msg' =>  'Akses ditolak, anda bukan owner'
                ], 401);
            }

        }catch(ExpiredException $e){
            return response()->json([
                    'msg' =>  $e->getMessage()
            ], 401);
        }



    }
}
