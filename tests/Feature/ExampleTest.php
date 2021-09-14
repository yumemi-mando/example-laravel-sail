<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test example2.
     *
     * @return void
     */
    public function test_example2()
    {
        $response = $this->get('/foo');

        $response->assertStatus(404);
    }
}
