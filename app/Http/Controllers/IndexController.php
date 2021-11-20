<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Classes\BlogReader;
use App\Classes\Filters\Hidden;

/**
 * Class IndexController.
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('frontend.index')->with(array_merge($this->title, [
            'blogs' => BlogReader::fromFilesystem()->applyFilters([new Hidden()])->take(3)->desc()->get(),
            'review' => $this->randomTestimonial(),
            'title' => 'SEO, Web Design & Hosting | 131 Studios',
        ]));
    }

    /**
     * @return Testimonial|Testimonial[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    private function randomTestimonial()
    {
        $testimonials = Testimonial::all();

        return $testimonials->isNotEmpty() ? $testimonials->random(2) : new Testimonial;
    }
}
