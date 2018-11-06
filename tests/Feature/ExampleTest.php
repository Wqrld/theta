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


    public function test_url($url) {
      $data = file_get_contents("$this->API?url=$url");
      $result = json_decode($data, true);
      $this->assertEquals(true, $result['result']);
      $this->assertEquals(200, $result['code']);
    }
    test_url("127.0.0.1")

      // $response = $this->get('/');
      // echo $response->dump();

    /*    $response->assertStatus(500);*/

        $this->assertTrue(true);
    }
}
