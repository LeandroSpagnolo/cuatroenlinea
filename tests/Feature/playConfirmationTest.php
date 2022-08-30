<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class playConfirmationTest extends TestCase
{
    public function test_page_response()
    {
        $response = $this->get('/jugar/1');

        $response->assertStatus(200);
    }
}
