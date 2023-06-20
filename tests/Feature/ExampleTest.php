<?php

namespace Tests\Feature;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testResponse()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
