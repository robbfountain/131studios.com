<?php

namespace App\Listeners;

use App\Blog;
use Facades\App\Classes\BlogImporter;
use Illuminate\Contracts\Queue\ShouldQueue;
use OneThirtyOne\Mime\Facades\MessageCollector;

/**
 * Class FetchS3Messages
 * @package App\Listeners
 */
class FetchS3Messages implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     *
     * @return void
     */
    public function handle($event)
    {
        MessageCollector::fromBucket()->each(function ($message) {
            if (!Blog::hasCurrentBlogPost($message)) {
                $blog = BlogImporter::messageToBlogPost($message);

                Blog::create(
                    $blog->toArray()
                );
            }
        });
    }
}
