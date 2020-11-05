<?php
return [
    'bills_providers'  => [
        'EasyBills'=> [
            'environments' =>[
                'live_base_uri' => env('EASY_BILLS_LIVE_BASE_URI')
            ],
            'endpoints' => [
                'purchase_power' => '/customer/purchase',
                'verify_meter' => '/customer/validate',
                'wallet_balance' => '/wallet/balance'
            ],
            'auth'=> [
                'secret'=>env('EASY_BILLS_SECRET_KEY'),
            ]
        ],

        'Baxi' => [
            'environments' =>[
                'live_base_uri' => env('BAXI_LIVE_BASE_URI')
            ],
            'endpoints' => [
                'purchase_power' => '/baxipay/services/electricity/request',
                'verify_meter' => '/baxipay/services/namefinder/query',
                'wallet_balance' => '/baxipay/superagent/account/balance',
                'get_provider_bouquets' => '/baxipay/services/multichoice/list',
                'purchase_tv_subscription' => '/baxipay/services/multichoice/request'
            ],
            'auth'=> [
                'secret'=>env('BAXI_TEST_SECRET'),
                'username' => env('BAXI_TEST_USERNAME'),
                'api_key' => env('BAXI_TEST_API_KEY')
            ]
        ],

    ],
    'app' => [
        'site_title' => 'Recharge Pro'
    ]
];
