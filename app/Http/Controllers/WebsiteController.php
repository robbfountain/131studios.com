<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Project;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

/**
 * Class WebsiteController
 * @package App\Http\Controllers
 */
class WebsiteController extends Controller
{
    /**
     * @var
     */
    protected $title = ['title' => 'Web Design, Social Media, Hosting & SEO | 131 Studios'];


    /**
     * @return mixed
     */
    public function handle()
    {
        $methodName = 'handle' . studly_case(request()->path());

        if (method_exists($this, $methodName)) {
            return $this->{$methodName}();
        }

        abort(404);
    }

    /**
     * @return Factory|View
     */
    public function handleWebsiteDesign()
    {
        return view('frontend.website-design')->with(['title' => 'Website Design | 131 Studios']);
    }

    /**
     * @return Factory|View
     */
    public function handleHosting()
    {
        return view('frontend.hosting')->with(['title' => 'Web Hosting In Greencastle, Chambersburg & Hagerstown  | 131 Studios']);
    }

    /**
     * @return Factory|View
     */
    public function handleSeo()
    {
        return view('frontend.seo')->with(['title' => 'Search Engine Optimization - SEO | 131 Studios']);
    }

    /**
     * @return Factory|View
     */
    public function handleAdditionalServices()
    {
        return view('frontend.additional-services')->with(['title' => 'Additional Services | 131 Studios']);
    }

    /**
     * @return Factory|View
     */
    public function handleEmailHosting()
    {
        return view('frontend.email-hosting')->with(['title' => 'Email Hosting | 131 Studios']);
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function index($page = 'index')
    {
        $methodName = 'handle' . Str::studly($page);

        if (method_exists($this, $methodName)) {
            return $this->{$methodName}();
        }

        abort(404);
    }

    /**
     * @return Factory|View
     */
    public function handleIndex()
    {
        return view('frontend.index')->with(array_merge($this->title, [
            'blogs' => Blog::published()->latest('published_at')->take(4)->get(),
        ]));
    }

    /**
     * @param $view
     * @param $heading
     *
     * @return $this
     */
    private function renderView($view, $heading)
    {
        return view('frontend.' . $view)->with(['heading' => $heading]);
    }

    /**
     * @return Factory|View
     */
    public function handleSocialMedia()
    {
        return view('frontend.social-media')->with(['title' => 'Social Media | 131 Studios']);
    }


    /**
     * @return Factory|View
     */
    public function handlePrivacy()
    {
        return view('frontend.privacy')->with(['title' => 'Privacy Policy | 131 Studios']);
    }

    /**
     * @return Factory|View
     */
    public function handleTerms()
    {
        return view('frontend.terms');
    }

    /**
     * @return WebsiteController
     */
    public function hosting()
    {
        return $this->renderView('services.hosting', 'Hosting');
    }

    /**
     * @param null $slug
     *
     * @return $this
     */
    public function handleProjects()
    {
        return view('frontend.projects')->with([
            'projects' => $this->getProjects(),
            'title' => 'Our Portfolio'
        ]);

    }

    /**
     * @return mixed
     */
    private function getProjects()
    {
        return Blog::published()->whereHas('category', function ($query) {
            $query->project();
        })->get();
    }
}
