<?php

namespace Tests\Unit;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_new_post()
    {
        $data = [
            'title' => 'New Post',
            'description' => 'This is a new post description'
        ];

        $response = $this->post(route('posts.store'), $data);

        $this->assertDatabaseHas('posts', $data);
        $response->assertRedirect(route('posts.index'));
        $response->assertSessionHas('status', 'Post Created Successfully');
    }

    /** @test */
    public function it_can_show_a_single_post()
    {
        $post = Post::factory()->create();

        $response = $this->get(route('posts.show', $post));

        $response->assertOk();
        $response->assertViewIs('posts.show');
        $response->assertViewHas('post', $post);
    }

    /** @test */
    public function it_can_update_an_existing_post()
    {
        $post = Post::factory()->create();

        $data = [
            'title' => 'Updated Post',
            'description' => 'This is an updated post description'
        ];

        $response = $this->put(route('posts.update', $post), $data);

        $this->assertDatabaseHas('posts', $data);
        $response->assertRedirect(route('posts.index'));
        $response->assertSessionHas('status', 'Post Updated Successfully');
    }

}
