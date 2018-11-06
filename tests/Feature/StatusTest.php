<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Statustest extends TestCase
{
    /**
     * Tests status of the main page
     *
     * @return void
     */
    public function testBasicTest()
    {
    echo public_path(). "\n";

    $response = file_get_contents("http://127.0.0.1", false);
    $status_line = $http_response_header[0];

    preg_match('{HTTP\/\S*\s(\d{3})}', $status_line, $match);

    $status = $match[1];
    $this->assertEquals(200, $status);


      // $response = $this->get('/');
      // echo $response->dump();

    /*    $response->assertStatus(500);*/

    //    $this->assertTrue(true);
    }
}
