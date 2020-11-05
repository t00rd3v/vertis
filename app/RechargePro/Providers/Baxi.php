<?php


namespace App\RechargePro\Providers;


use App\RechargePro\Contracts\EBillsServiceProviderInterface;
use App\RechargePro\traits\HttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\Type\MixedType;
use App\RechargePro\Providers\EasyPay;

class Baxi implements EBillsServiceProviderInterface
{
    private $headers;
    private $base_uri;
    use HttpClient;

    public function __construct()
    {
        $this->base_uri = config('rechargepro.bills_providers.Baxi.environments.live_base_uri');
        $this->headers = [
            'Authorization' => 'Api-key '.config('rechargepro.bills_providers.Baxi.auth.api_key')
        ];
    }

    public function handle(Request $request)
    {
        $method = 'handle_'.$request->service;
        if(method_exists($this, $method)){
            return $this->$method($request);
        }
        return response(['error'=>'service not found'], 422);
    }

    private function handle_power_purchase(Request $request): \Illuminate\Http\Client\Response
    {
        // @todo : Validate the request

        // Verify Meter number
        $meter_validation_response = $this->verify_meter_number($request);

        // Check if user can purchase power
        $can_purchase_power= $this->can_purchase_power($meter_validation_response);

        if($can_purchase_power){
            // Process the power purchase
            $power_purchase_response = $this->purchase_power($request);
            return $power_purchase_response;
        }
        return response()->json(['purchase_failed' => true]);

    }

    private function verify_meter_number($meter_details): \Illuminate\Http\Client\Response
    {
        $validation_service = $this->base_uri.config('rechargepro.bills_providers.Baxi.endpoints.verify_meter');
        return $this->post($validation_service, [
            'account_number' => $meter_details->meter_number,
            'service_type' => $meter_details->location.'_electric_'.$meter_details->account_type
        ], $this->headers);

    }

    private function can_purchase_power(\Illuminate\Http\Client\Response $meter_validation_response)
    {

        $validation_response = json_decode($meter_validation_response->body(), false);
        if(
            $validation_response->status === 'success' &&
            $validation_response->code === 200 &&
            $validation_response->data->user->outstandingBalance === null
        ){
          return true;
        }
        return  (object)['can_purchase' => false, 'error' => $validation_response->data->user->errorMessage];
    }

    private function purchase_power($purchase_details){

        $purchase_service = $this->base_uri.config('rechargepro.bills_providers.Baxi.endpoints.purchase_power');

        $headers = $this->headers;

        $headers[] = ['Baxi-Date' => DATE_RFC3339];

        $trans_ref = $purchase_details->meter_number.'|'.$purchase_details->phone.'|'.$purchase_details->amount.'|'.DATE_RFC3339;

        return $this->post($purchase_service, [
            'phone' => $purchase_details->phone,
            'amount' => $purchase_details->amount,
            'account_number' => $purchase_details->meter_number,
            'service_type' => $purchase_details->location.'_electric_'.$purchase_details->account_type,
            'agentReference' => md5($trans_ref).'-'.$trans_ref,
            'agentId'=> 'vertis'
        ], $headers);
    }

    private function handle_power_purchase_response(\Illuminate\Http\Client\Response  $power_purchase_response){

        $power_purchase_response_obj = json_decode($power_purchase_response->body(), false);

        if($power_purchase_response_obj->status === 'error'){

            // Log the error
            Log::error(json_encode($power_purchase_response_obj));

            return response()->json([
               'success' => false,
               'message' => 'Error Processing Request, Please try again',
            ]);
        }

        return response()->json([
            'success' => true,
            'payload' => $power_purchase_response_obj
        ]);
    }

    private function handle_get_provider_bouquets(Request $request){

        $bouquets_service = $this->base_uri.config('rechargepro.bills_providers.Baxi.endpoints.get_provider_bouquets');
        $bouquets_response = $this->post($bouquets_service, ['service_type' => $request->cable_tv_provider], $this->headers);
        return $bouquets_response->json();
    }

    private function purchase_tv_subscription(Request $request){

        $subscription_service = $this->base_uri.config('rechargepro.bills_providers.Baxi.endpoints.purchase_tv_subscription');

        $headers = $this->headers;
        $headers[] = ['Baxi-Date' => DATE_RFC3339];

        $trans_ref = $request->total_amount.'|'.$request->duration_in_month.'|'.$request->product_code.'|'.'|'.$request->smartcard_number.DATE_RFC3339;

        $purchase_response = $this->post(
            $subscription_service,
            [
                'total_amount' => $request->total_amount,
                'product_monthsPaidFor' => $request->duration_in_month,
                'product_code' => $request->product_code,
                'smartcard_number' => $request->smartcard_number,
                'agentReference' => md5($trans_ref).'-'.$trans_ref,
                'agentId' => 'vertis',
                'service_type' => $request->cable_tv_provider
            ],
            $headers);

    }

}
