<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use App\Models\User;

class DurationController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);

        try {
            $http = new Client();
            $response = $http->get(env('API_URL') . '/api/duration', [
                'headers' => [
                    'Authorization' => $user['token']
                ]
            ]);
            $result = json_decode($response->getBody()->getContents(), true);

            $result = $result['data']['duration'];

            return view('settings-pages.pengaturan-durasi')->with('durations', $result);
        } catch (BadResponseException $e) {
            $http = new Client();
            $response = $http->get(env('API_URL') . '/api/duration');

            $result = json_decode($response->getBody()->getContents(), true);
            $result = $result['msg'];
            return view('settings-pages.pengaturan-durasi')->with('error', $result);
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
            'value' => $request->value,
        ];

        // Lakukan POST request
        $response = $client->post(env('API_URL') . '/api/duration', [
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
        return redirect('/pengaturan-durasi');
    }

    public function edit(Request $request)
    {
        $user = User::find(auth()->user()->id);
        // Buat instance dari GuzzleHttp\Client
        $client = new Client();

        // Data yang akan dikirim dalam body request
        $data = [
            'name' => $request->name,
            'value' => $request->value,
        ];

        // Lakukan POST request
        $response = $client->put(env('API_URL') . '/api/duration/' . $request->id, [
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
        return redirect('/pengaturan-durasi');
    }

    public function delete($id)
    {
        $user = User::find(auth()->user()->id);
        // Buat instance dari GuzzleHttp\Client
        $client = new Client();

        // Lakukan POST request
        $response = $client->delete(env('API_URL') . '/api/duration/' . $id, [
            'headers' => [
                'Authorization' => $user['token'],
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ] // Gunakan 'json' untuk mengirim data sebagai JSON
        ]);

        // Dapatkan body response
        $body = $response->getBody();
        $content = $body->getContents();

        // Decode JSON response menjadi array
        $decodedResponse = json_decode($content, true);

        // Lakukan sesuatu dengan response
        return redirect('/pengaturan-durasi');
    }
}
