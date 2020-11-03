<?php


namespace App\RechargePro\Providers;


use App\RechargePro\Contracts\EBillsServiceProviderInterface;

class PagaTech implements EBillsServiceProviderInterface
{
    /**
     * @param $request
     * @return mixed
     */
    public function handle($request)
    {
        return $this->provides($request)[$request['service']];
    }

    public function handle_purchase_token_request($request){
        return response()->json(['token' => bcrypt('all0wm3n0t')]);
    }

    public function provides($request){
        return [
            'aedc' => $this->handle_purchase_token_request($request)
        ];
    }
}
