<?php


namespace App\RechargePro\Contracts;


use Illuminate\Http\Request;

interface EBillsServiceProviderInterface
{
   public function handle(Request $request);
}
