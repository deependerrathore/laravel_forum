<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ReadThreadsTest extends TestCase 
{   
    use DatabaseMigrations;

    public function setUp():void{
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
    }
    
    /** @test */
    public function a_user_can_browse_thread_link(){

        $response = $this->get('/threads');
        $response->assertStatus(200);
    }

    /** @test */
    public function test_a_user_can_browse_all_thread(){
        
        $this->get('/threads')
            ->assertSee($this->thread->title);
    }
    /** @test */
    public function test_a_user_can_browse_single_thread(){
        
        $this->get('/threads/'.$this->thread->id)
            ->assertSee($this->thread->title);
    }

    /** @test */
    public function a_user_can_read_replies_that_are_associated_with_a_thread(){
        //given we have a thread
        //and the thread includes replies
        $reply = factory('App\Reply')
            ->create(['thread_id' => $this->thread->id]);
        //when we visit thread page
        $this->get('/threads/'.$this->thread->id)
            ->assertSee($reply->body);
        //then we should see the replies
    }
}
