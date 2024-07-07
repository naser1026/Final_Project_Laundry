<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

class OrderController extends Controller
{
    public function showAllOrder()
    {
        try {
            $http = new Client();
            $response = $http->get(env('API_URL') . '/api/order');

            $results = json_decode($response->getBody()->getContents(), true);

            $results = $results['data']['orders'];
            $antrian = [];

            foreach ($results as $result) {
                if ($result['order_status'] == 'Antrian') {
                    $antrian[] = $result;
                }
            }

            return view('order-pages.pesanan')->with('orders', $antrian);
        }catch(BadResponseException $e) {
            $http = new Client();
            $response = $http->get(env('API_URL') . '/api/duration');

            $result = json_decode($response->getBody()->getContents(), true);
            $result = $result['msg'];
            return view('settings-pages.pengaturan-durasi')->with('error', $result);


        }
    }
}
