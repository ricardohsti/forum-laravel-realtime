<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Testing Replies.
     *
     * @return void
     */
    public function testReplies()
    {
        $this->seed('RepliesTableSeeder');

        $response = $this->get('/threads/1');
        $response->assertStatus(200);

        $response = $this->get('/threads/2');
        $response->assertStatus(200);

        $response = $this->get('/threads/a');
        $response->assertStatus(404);
    }

    /**
     * Testing Replies.
     *
     * @return void
     */
    public function testThreadView()
    {
        $this->seed('ThreadsTableSeeder');

        $thread = \App\Models\Thread::find(1);

        $response = $this->get('/threads/1');
        $response->assertSee($thread->title);
        $response->assertSee($thread->body);
    }
}
