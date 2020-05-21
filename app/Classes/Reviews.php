<?php


namespace App\Classes;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

/**
 * Class Reviews
 * @package App\Classes
 */
class Reviews
{
    protected $placeId;

    protected $apiKey;

    protected $url;

    protected $results;


    public function __construct()
    {
        $this->placeId = env('GOOGLE_PLACE_ID');
        $this->apiKey = env('GOOGLE_PLACES_SECRET');
    }

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


    private function url()
    {
        return "https://maps.googleapis.com/maps/api/place/details/json?placeid={$this->placeId}&key={$this->apiKey}";
    }
}
