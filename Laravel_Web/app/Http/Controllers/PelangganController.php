<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use App\Models\User;

class PelangganController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);

        try {
            $http = new Client();
            $response = $http->get(env('API_URL') . '/api/customer', [
            ]);
            $result = json_decode($response->getBody()->getContents(), true);

            $result = $result['data']['customers'];

            // return response()->json([
            //         'customers' =>  $result
            // ], );

            return view('settings-pages.pengaturan-pelanggan')->with('customers', $result);
        } catch (BadResponseException $e) {
            $http = new Client();
            $response = $http->get(env('API_URL') . '/api/cashier', );

            $result = json_decode($response->getBody()->getContents(), true);
            $result = $result['msg'];
            return view('settings-pages.pengaturan-diskon')->with('error', $result);
        }
    }

    public function create(Request $request)
    {

        $user = User::find(auth()->user()->id);
        // Buat instance dari GuzzleHttp\Client
        $client = new Client();

        // Data yang akan dikirim dalam body request
        $data = [
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'created_by' => auth()->user()->id
        ];

        // Lakukan POST request
        $response = $client->post(env('API_URL') . '/api/customer', [
            'headers' => [
                'Authorization' => $user['token'],
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => $data, // Gunakan 'json' untuk mengirim data sebagai JSON
        ]);

        // Dapatkan body response
        $body = $response->getBody();
        $content = $body->getContents();

        // Decode JSON response menjadi array
        $decodedResponse = json_decode($content, true);

        // Lakukan sesuatu dengan response
        return redirect('/pengaturan-pelanggan');
    }

    public function edit(Request $request)
    {
        $user = User::find(auth()->user()->id);
        // Buat instance dari GuzzleHttp\Client
        $client = new Client();

        // Data yang akan dikirim dalam body request
        $data = [
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'created_by' => auth()->user()->id,
        ];
        // return response()->json([
        //     "data" => [
        //         'msg' => 'test',
        //         'data' => $data
        //     ]
        // ]);

        // Lakukan POST request
        $response = $client->put(env('API_URL') . '/api/customer/' . $request->id, [
            'json' => $data, // Gunakan 'json' untuk mengirim data sebagai JSON
        ]);

        // Dapatkan body response
        $body = $response->getBody();
        $content = $body->getContents();

        // Decode JSON response menjadi array
        $decodedResponse = json_decode($content, true);

        // Lakukan sesuatu dengan response
        return redirect('/pengaturan-pelanggan');
    }

    public function delete($id)
    {
        $user = User::find(auth()->user()->id);
        // Buat instance dari GuzzleHttp\Client
        $client = new Client();

        // Lakukan POST request
        $response = $client->delete(env('API_URL') . '/api/customer/' . $id);
        // Dapatkan body response
        $body = $response->getBody();
        $content = $body->getContents();

        // Decode JSON response menjadi array
        $decodedResponse = json_decode($content, true);

        // Lakukan sesuatu dengan response
        return redirect('/pengaturan-pelanggan');
    }
}
