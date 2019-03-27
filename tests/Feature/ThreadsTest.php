<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ThreadsTest extends TestCase 
{   
    use DatabaseMigrations;
    
    /** @test */
    public function test_a_user_can_browse_thread(){
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
