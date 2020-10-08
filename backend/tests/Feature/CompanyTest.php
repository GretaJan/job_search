<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Company;

class CompanyTest extends TestCase
{
    /** @test */
    public function company_can_be_registered()
    {
       $this->withoutExceptionHandling();
    // $company = Company::factory()->make();
    // $company = factory(Company::class, 1)->make();
        // $company = Company::factory()->create();

        $response = $this->postJson('/api/imones-registracija', [
            'company_name' => Company::factory()->create()->company_name,
            'company_code' => Company::factory()->create()->company_code,
            'email' => Company::factory()->create()->email . rand(0, 100),
            'password' => Company::factory()->create()->password
        ]);
        $response->assertStatus(201);
    }
}
