<?php

namespace App\Traits;

use App\Project;
use JD\Cloudder\Facades\Cloudder;

trait HandlesImages
{

    /**
     * @var array
     */
    protected $imageOptions = [
        'fetch_format' => 'auto',
        'width' => 'auto',
        'crop' => 'fit',
    ];

    public function getImage()
    {
        return $this->image ?? $this->defaultImages[$this->category->name];
    }

    /**
     * @param  array  $options
     *
     * @return string
     */
    public function imageUrl($options = [])
    {
        return request()->secure()
            ? Cloudder::secureShow($this->getImage(), array_merge($this->imageOptions, $options))
            : Cloudder::show($this->getImage(), array_merge($this->imageOptions, $options));
    }

    /**
     * @return bool
     */
    public function hasImage()
    {
        return !is_null($this->image);
    }
}
