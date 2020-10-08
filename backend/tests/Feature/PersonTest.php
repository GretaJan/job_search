<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Person;

class PersonTest extends TestCase
{
    /** @test */
    public function person_can_be_registered()
    {
        $this->withoutExceptionHandling();
        $response = $this->postJson('/api/asmens-registracija', [
            'email' => Person::factory()->create()->email . rand(0, 100),
            'password' =>  Person::factory()->create()->password
        ]);
        $response->assertStatus(201);
    }
}
