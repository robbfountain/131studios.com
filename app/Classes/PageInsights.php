<?php

namespace App\Classes;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PageInsights
{
    public const FIRST_CONTENTFUL_PAINT = 1;
    public const SPEED_INDEX = 2;
    public const LARGEST_CONTENTFUL_PAINT = 3;
    public const TIME_TO_INTERACTIVE = 4;
    public const TOTAL_BLOCKING_TIME = 5;
    public const CUMULATIVE_LAYOUT_SHIFT = 6;
    /**
     * @var array|null
     */
    public ?array $insight;

    protected $insightKeys = [
        'audits',
        'categories',
    ];

    /**
     * @param  array|null  $insight
     */
    public function __construct(?array $insight)
    {
        $this->insight = $insight;
    }

    /**
     * @param  array  $insights
     * @return static
     */
    public static function make(array $insights): self
    {
        return new static($insights);
    }

    /**
     * @param $metric
     * @return string[]
     */
    public static function ratingScale($metric): array
    {
        return [
            static::SPEED_INDEX => [
                '3.4' => 'bg-green-100 text-green-700',
                '5.8' => 'bg-yellow-100 text-yellow-700',
                '5.81' => 'bg-red-100 text-red-700',
            ],
            static::FIRST_CONTENTFUL_PAINT => [
                '1.8' => 'bg-green-100 text-green-700',
                '3' => 'bg-yellow-100 text-yellow-700',
                '3.01' => 'bg-red-100 text-red-700',
            ],
            static::LARGEST_CONTENTFUL_PAINT => [
                '2.5' => 'bg-green-100 text-green-700',
                '4' => 'bg-yellow-100 text-yellow-700',
                '4.01' => 'bg-red-100 text-red-700',
            ],
            static::CUMULATIVE_LAYOUT_SHIFT => [
                '.1' => 'bg-green-100 text-green-700',
                '.25' => 'bg-yellow-100 text-yellow-700',
                '.26' => 'bg-red-100 text-red-700',
            ],
            static::TIME_TO_INTERACTIVE => [
                '3.8' => 'bg-green-100 text-green-700',
                '7.3' => 'bg-yellow-100 text-yellow-700',
                '7.31' => 'bg-red-100 text-red-700',
            ],
            static::TOTAL_BLOCKING_TIME => [
                '200' => 'bg-green-100 text-green-700',
                '600' => 'bg-yellow-100 text-yellow-700',
                '601' => 'bg-red-100 text-red-700',
            ],
        ][$metric];
    }

    /**
     * @return string
     */
    public function score()
    {
        return number_format($this->get('performance.score', 'categories') * 100);
    }

    /**
     * @param $key
     * @param  string|null  $metric
     * @return array|\ArrayAccess|mixed
     */
    public function get($key, string $metric = 'audits')
    {
        return Arr::get($this->insight[$metric], $key);
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    public function performance()
    {
        return $this->category('performance');
    }

    /**
     * @param $key
     * @return array|\ArrayAccess|mixed
     */
    public function category($key)
    {
        return $this->get($key, 'categories');
    }

    public function __call($method, $args)
    {
        $key = Str::kebab($method);

        foreach ($this->insightKeys as $insightKey) {
            if (Arr::has($this->insight[$insightKey], $key)) {
                return $this->get($key.'.displayValue');
            }

            foreach (explode('-', $key) as $subKey) {
                if (Arr::has($this->insight[$insightKey], $subKey)) {
                    return $this->get($subKey.'.displayValue');
                }
            }
        }
    }
}
