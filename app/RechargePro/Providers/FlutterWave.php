<?php


namespace App\RechargePro\Providers;


use App\RechargePro\Contracts\EBillsServiceProviderInterface;

class FlutterWave implements EBillsServiceProviderInterface
{
    /**
     * @param $request
     * @return mixed
     */
    public function handle($request)
    {
       return response()->json(['payment_process' => true]);
    }
}
