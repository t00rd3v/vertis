<?php


namespace App\RechargePro\Handlers;


use App\RechargePro\Contracts\EBillsServiceProviderInterface;
use Illuminate\Support\Facades\Request;

class BillProvidersHandler
{
    public function handle($request, EBillsServiceProviderInterface $provider){
        return $provider->handle($request);
    }
}
