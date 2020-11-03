<?php

namespace Tests\Feature;

use App\Models\Service;
use App\Models\User;
use App\Models\Plan;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserCanMakeOrderTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;
   /** @test */
    public function user_can_post_order()
    {
       // $this->withoutExceptionHandling();

        $service = new Service([
            'name'=>'MTN'
        ]);

        $user = new User([
            'email' => 'paul@rechargepro.com.ng',
            'password' => bcrypt('all0wm3n0t'),
            'name' => 'Paul'
        ]);

        $plan = new Plan([
           'name' => '2GB'
        ]);

        $plan->save();
        $user->save();
        $service->save();

        $response = $this->post('/api/orders', [
                'service_id' => $service->id,
                'user_id' => $user->id,
                'plan_id' => $plan->id
        ]);

        $response->assertStatus(201);
    }
}
