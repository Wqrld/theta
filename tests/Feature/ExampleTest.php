<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       $response = $this->get('/');
echo $response;

$response = $this->call('GET', '/');
echo $response;
    /*    $response->assertStatus(500);*/

        $this->assertTrue(true);
    }
}
