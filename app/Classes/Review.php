<?php

namespace App\Classes;

/**
 * Class Review.
 */
class Review
{
    /**
     * @var mixed
     */
    public $author;

    /**
     * @var mixed
     */
    public $profile_photo;

    /**
     * @var mixed
     */
    public $rating;

    /**
     * @var mixed
     */
    public $text;

    /**
     * Review constructor.
     *
     * @param $review
     */
    public function __construct($review)
    {
        $this->author = $review['author_name'];
        $this->profile_photo = $review['profile_photo_url'];
        $this->rating = $review['rating'];
        $this->text = $review['text'];
    }

    /**
     * @param $property
     *
     * @return mixed
     * @throws \Exception
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->{$property};
        }

        throw new \Exception("Property {$property} does not exist.");
    }
}
