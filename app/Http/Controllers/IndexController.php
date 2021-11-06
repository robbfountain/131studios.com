<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Testimonial;

/**
 * Class IndexController.
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index')->with(array_merge($this->title, [
            'blogs' => Blog::blogPost()->latest('published_at')->take(3)->get(),
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
