<?php

namespace App\Classes;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

/**
 * Class Reviews.
 */
class Reviews
{
    /**
     * @var mixed
     */
    protected $placeId;

    /**
     * @var mixed
     */
    protected $apiKey;

    /**
     * @var
     */
    protected $url;

    /**
     * @var
     */
    protected $results;

    /**
     * Reviews constructor.
     */
    public function __construct()
    {
        $this->placeId = env('GOOGLE_PLACES_ID');
        $this->apiKey = env('GOOGLE_PLACES_KEY');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function get()
    {
        $response = HTTP::get(
            $this->url()
        )->json();

        return Collection::make(
            $response['result']['reviews']
        )->map(function ($review) {
            return new Review($review);
        });
    }

    /**
     * @return string
     */
    private function url()
    {
        return "https://maps.googleapis.com/maps/api/place/details/json?placeid={$this->placeId}&key={$this->apiKey}";
    }
}
