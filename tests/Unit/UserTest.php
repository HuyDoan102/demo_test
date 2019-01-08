<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStatusCode()
    {
        $payload = [];

        $response = $this->json('GET', '/api/users', $payload);

        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testNotEmptyResponse()
    {
        $payload = [];

        $response = $this->json('GET', '/api/users', $payload);
        $response = $response->json();

        $this->assertNotEmpty($response);
    }
}
