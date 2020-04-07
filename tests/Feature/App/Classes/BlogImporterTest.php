<?php

namespace Tests\Feature\App\Classes;

use App\Category;
use App\Classes\BlogImporter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use OneThirtyOne\Mime\Message;
use Tests\TestCase;

class BlogImporterTest extends TestCase
{
    use RefreshDatabase;

    public $message;

    public function setUp(): void
    {
        parent::setUp();

        $this->message = new Message(
            'robb@131studios.com',
            'blogcreate@131studios.com',
            '[Original] This is a test subject',
            "@publish(now)\n
            @tweet(https://twitter.com/status/123456)\n
            @ref(https://131studios.com)\n
            This is a test body\n",
            []);
    }

    /** @test */
    public function It_converts_a_message_to_a_blog_post()
    {
        $this->withExceptionHandling();

        $blog = BlogImporter::messageToBlogPost($this->message);

        $this->assertInstanceOf(BlogImporter::class, $blog);

    }

    /** @test */
    public function It_gets_the_category_from_the_subject()
    {
        $this->withExceptionHandling();
        $category = factory(Category::class)->create([
            'name' => 'Original',
        ]);

        $blog = BlogImporter::messageToBlogPost($this->message);

        $this->assertSame($category->id, $blog->toArray()['category_id']);
    }

    /** @test */
    public function It_creates_the_category_if_it_does_not_exist()
    {
        $this->withExceptionHandling();

        $blog = BlogImporter::messageToBlogPost($this->message)->toArray();

        $this->assertDatabaseHas('categories', ['name' => 'Original']);
    }

    /** @test */
    public function It_determines_if_the_article_should_be_published()
    {
        $this->withExceptionHandling();

        $blog = BlogImporter::messageToBlogPost($this->message)->toArray();

        $this->assertTrue($blog['is_published']);

        $unpublished = new Message(
            'robb@131studios.com',
            'blogcreate@131studios.com',
            '[Original] This is a test subject',
            "@publish(tomorrow)\nThis is a test body",
            []);

        $blog2 = BlogImporter::messageToBlogPost($unpublished)->toArray();

        $this->assertFalse($blog2['is_published']);
    }

    /** @test */
    public function It_extracts_a_tweet_from_the_message()
    {
        $this->withExceptionHandling();

        $blog = BlogImporter::messageToBlogPost($this->message)->toArray();

        $this->assertSame('https://twitter.com/status/123456',$blog['tweet']);

    }

    /** @test */
    public function It_extracts_a_reference_url_from_the_message()
    {
        $this->withExceptionHandling();

        $blog = BlogImporter::messageToBlogPost($this->message)->toArray();

        $this->assertSame('https://131studios.com',$blog['reference_url']);

    }

    /** @test */
    public function It_extracts_the_body_of_the_blog_post()
    {
        $this->withExceptionHandling();

        $blog = BlogImporter::messageToBlogPost($this->message)->toArray();

        $this->assertSame('This is a test body',$blog['body']);

    }
}
