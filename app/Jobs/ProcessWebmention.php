<?php

namespace App\Jobs;


use App\Blog;
use App\WebMention;
use Spatie\Url\Url;
use Illuminate\Support\Arr;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\WebhookClient\ProcessWebhookJob;

class ProcessWebmention extends ProcessWebhookJob
{
    public function handle()
    {
        $payload = $this->webhookCall->payload;

        if ($this->payloadHasBeenReceivedBefore($payload)) {
            return;
        }

        if (!$type = $this->getType($payload)) {
            return;
        }

        if (!$blog = $this->getPost($payload)) {
            return;
        }

        WebMention::create([
                               'blog_id' => $blog->id,
                               'type' => $type,
                               'webmention_id' => Arr::get($payload, 'post.wm-id'),
                               'author_name' => Arr::get($payload, 'post.author.name'),
                               'author_photo_url' => Arr::get($payload, 'post.author.photo'),
                               'author_url' => Arr::get($payload, 'post.author.url'),
                               'interaction_url' => Arr::get($payload, 'post.url'),
                               'text' => Arr::get($payload, 'post.content.text'),
                           ]);
    }

    private function payloadHasBeenReceivedBefore(array $payload): bool
    {
        $webmentionId = Arr::get($payload, 'post.wm-id');

        return WebMention::where('webmention_id', $webmentionId)->exists();
    }

    private function getType(array $payload): ?string
    {
        $types = [
            'in-reply-to' => WebMention::TYPE_REPLY,
            'like-of' => WebMention::TYPE_LIKE,
            'repost-of' => WebMention::TYPE_RETWEET,
        ];

        $wmProperty = Arr::get($payload, 'post.wm-property');

        if (!array_key_exists($wmProperty, $types)) {
            return null;
        }

        return $types[$wmProperty];
    }

    private function getPost(array $payload): ?Post
    {
        $url = Arr::get($payload, 'post.wm-target');

        if (!$url) {
            return null;
        }

        $blogIdSlug = Url::fromString($url)->getSegment(2);
        
        return Blog::where('slug', $blogIdSlug)->first();
    }
}
