<?php


namespace App\RechargePro\traits;
use Illuminate\Support\Facades\Http;

trait HttpClient
{
    public function post($url, $data, $headers): \Illuminate\Http\Client\Response
    {
        return Http::withHeaders($headers)->post($url, $data);
    }
}
