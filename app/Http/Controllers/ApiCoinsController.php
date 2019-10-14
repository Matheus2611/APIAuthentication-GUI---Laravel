<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Coins;

class ApiCoinsController extends Controller
{

    public function getRemoteData()
    {

    $client = new Client();

    $request = $client->get('https://api.coinmarketcap.com/v2/ticker/');
    $json = $request->getBody();
    $json = json_decode($json);

    dd($json);

    foreach ($json as $json)
    {
       Coins::create([
           'id' =>$json->id,
           'name' =>$json->name,
           'market_cap' =>$json->market_cap,
           'price' =>$json->price,
           'volume_24h' =>$json->volume_24h,
           'percent_change_24h' =>$json->percent_change_24h

        ]);

    }


    }

    public function index(Request $request)
    {

        $coins = Coins::orderBy('name', 'desc');

        return response()->json($coins->paginate(100));

    }


    public function show($id)
    {
        $coins = Coins::find($id);

        return response()->json([
            'error' => false,
            'coins'  => $coins,
        ], 200);
    }




}
