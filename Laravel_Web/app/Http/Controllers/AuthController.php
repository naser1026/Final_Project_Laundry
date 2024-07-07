<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function index()
    {
        return view('session.login-session');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        try {
            $http = new Client();
            $response = $http->post('https://www.kiwifresh.my.id/api/login', [
                'headers' => [
                    'Authorization' => 'Bearer' . session()->get('token.session_token')
                ],
                'query' => [
                    'email' => $request->email,
                    'password' => $request->password
                ]
            ]);
            $result = json_decode((string) $response->getBody(), true);
            if ($response->getStatusCode() == 200) {
                $data = [
                    'email' => 'owner@mail.com',
                    'password' => 'owner123'
                ];

                if(Auth::attempt($data)){
                    $user = User::where('email', $data['email'])->first();
                    $user->update([
                        'token' => $result['data']['token']
                    ]);
                    session()->regenerate();
                    return view('/dashboard', $result);

                }
            }
        } catch (BadResponseException $e) {

            return redirect('/login')->with('error', 'Email atau Password salah!');
        }
    }
}
