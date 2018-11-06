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



    echo public_path(). "\n";
    echo base_path();
      // $response = $this->get('/');
      // echo $response->dump();

    /*    $response->assertStatus(500);*/

        $this->assertTrue(true);
    }
}
