<?php


namespace App\RechargePro\Providers;


use App\RechargePro\Contracts\EBillsServiceProviderInterface;
use Illuminate\Support\Facades\Validator;

class Monnify implements EBillsServiceProviderInterface
{

    public function handle($request)
    {
        $method = 'handle_'.$request->service;
        if(method_exists($this, $method)){
            return $this->$method($request);
        }
        return response(['error'=>'service not found'], 422);
    }

    public function handle_wallet_funding($request){
        $validation = Validator::make($request->all(), [
           'amount' => 'required'
        ]);

        if($validation->fails()){
            return response()->json(['validation_errors' => $validation->errors()]);
        }

        $amount = $request->amount;

        return ['success' => true, 'amount_funded' => $amount];
    }



}
