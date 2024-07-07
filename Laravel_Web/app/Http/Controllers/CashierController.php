<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

class CashierController extends Controller
{
    public function index()
    {

        try {
        $http = new Client;

        $response = $http->get('https://www.kiwifresh.my.id/api/cashier');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('settings-pages.pengaturan-kasir')->with('data', $result['data']);
        } catch (BadResponseException $e) {

            $response = $e->getResponse();
            $result = json_decode($response->getBody()->getContents(), true);
            return view('settings-pages.pengaturan-kasir')->with('error', $result['msg']);

        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        return response()->json($request->all());
        try {
            $http = new Client;

            $response = $http->post('https://www.kiwifresh.my.id/api/cashier?', [
                'body' => [
                    'name' => $request->name
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            return view('settings-pages.pengaturan-kasir')->with('data', $result['data']);
            } catch (BadResponseException $e) {

                $response = $e->getResponse();
                $result = json_decode($response->getBody()->getContents(), true);
                return view('settings-pages.pengaturan-kasir')->with('error', $result['msg']);

            }
    }
}
