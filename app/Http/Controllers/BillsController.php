<?php

namespace App\Http\Controllers;

use App\RechargePro\Handlers\BillProvidersHandler;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function handle(Request $request)
    {
        $provider = $request->provider;
        $handler = "App\\RechargePro\\Providers\\".$provider;
        return (new BillProvidersHandler)->handle($request, new $handler);
    }
}
