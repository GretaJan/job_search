<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;

class AdminTest extends TestCase
{
     /** @test */
    public function admin_can_be_registered()
    {
        $this->withoutExceptionHandling();
        // $admin = Admin::factory()->make();
        // $admin = factory(Admin::class, 1)->make();
        // $admin = Admin::factory()->create();
        $response = $this->post('/api/administratoriaus-registracija', [
            'email' => Admin::factory()->create()->email . rand(0, 100),
            'password' =>  Admin::factory()->create()->password
        ]);
        $response->assertStatus(201);
    }

    /** @test */
    public function admin_can_login()
    {
        $this->withoutExceptionHandling();
        $admin = Admin::factory()->create();
        
        $response = $this->post('/api/admin-prisijungimas', [
            'email' => $admin->email,
            'password' =>  $admin->password
        ]);
        $response->assertStatus(200);
    }
}
