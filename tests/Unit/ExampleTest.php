<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {


        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create(['created_at' => \Carbon\Carbon::now()->subMonth()]);

        $posts = Post::archives();

        $this->assertEquals([

            [
                "month" => $first->created_at->format('F'),
                "year" => $first->created_at->format('Y'),
                "published" => 1
            ],

            [
                "month" => $second->created_at->format('F'),
                "year" => $second->created_at->format('Y'),
                "published" => 1
            ]

        ], $posts);
    }
}
