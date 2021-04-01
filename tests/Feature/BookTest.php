<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
    }

    public function test_book_id_get_request()
    {
        $response = $this->get('/book/1');

        $response->assertStatus(200);
    }

    public function test_get_unexisted_book()
    {
        $response = $this->get('/book/10000');

        $response->assertStatus(404);
    }

    public function test_book_response()
    {
        $response = $this->get('/book/1');

        $response->assertViewHas('book');
    }
}
