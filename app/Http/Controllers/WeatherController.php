<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use GuzzleHttp\Client;

//use Illuminate\Http\Request;

class WeatherController extends Controller
{
    //

    public function getWeather()
    {
        $client = new Client();
        $response = $client->get('https://weather-service.com/api/forecast');
        $data = json_decode($response->getBody(), true);

        return view('weather', ['data' => $data]);
    }

}
