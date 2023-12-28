<?php

namespace App\Classes;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class PageInsightsResponse
{
    public const INSIGHTS_API = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed';

    /**
     * @var
     */
    public $response;

    /**
     * @var string
     */
    protected string $url;

    /**
     * @param  string  $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param  $url
     * @return array|mixed
     */
    public static function createForUrl($url)
    {
        $insights = new static($url);

        return Arr::get($insights->fetch(), 'lighthouseResult');
    }

    /**
     * @return array|mixed
     */
    public function fetch()
    {
        return Http::get(self::INSIGHTS_API, [
            'url' => $this->url,
            'key' => config('services.google.api_key'),
        ])->json();
    }
}
