<?php


namespace App\RechargePro\Providers;


use App\RechargePro\Contracts\EBillsServiceProviderInterface;
use App\RechargePro\traits\HttpClient;

class EasyPay implements EBillsServiceProviderInterface
{
    use HttpClient;

    public function handle($request)
    {
        $method = 'handle_'.$request->service;

        if(method_exists($this, $method)){
            return $this->$method($request);
        }
        return response(['error'=>'service not found'], 422);
    }

    public function handle_power_purchase($request)
    {
        $customer_validation_response = $this->verify_meter_number((object)$request->except(['provider', 'service']));
        return $customer_validation_response;
    }

    public function verify_meter_number($meter_details)
    {

        $meter_number_verify_endpoint = config('rechargepro.bills_providers.EasyBills.environments.live_base_uri') . config('rechargepro.bills_providers.EasyBills.endpoints.verify_meter');

        $verification_response = $this->post($meter_number_verify_endpoint, [
            'account_type' => $meter_details->account_type,
            'customer_email' => $meter_details->customer_email,
            'customer_phone' => $meter_details->customer_phone,
            'customer_meter_number' => $meter_details->customer_meter_number
        ], ['Authorization' => 'Bearer '.config('rechargepro.bills_providers.EasyBills.auth.secret')]);

        return $verification_response->json();
    }
}

