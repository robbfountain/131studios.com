<?php

namespace Tests\Unit\App;

use App\Blog;
use App\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Collection;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function It_belongs_to_a_blog()
    {
        $category = factory(Category::class)->create();
        $blog = factory(Blog::class)->create(['category_id' => $category->id]);

        $this->assertInstanceOf(Collection::class, $category->blog);
        $this->assertInstanceOf(Blog::class, $category->blog->first());
    }
}
