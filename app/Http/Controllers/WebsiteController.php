<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Project;
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
        return view('frontend.website-design')->with(['title' => 'Website Design']);
    }

    /**
     * @return Factory|View
     */
    public function handleHosting()
    {
        return view('frontend.hosting')->with(['title' => 'Web Hosting In Greencastle, Chambersburg & Hagerstown']);
    }

    /**
     * @return Factory|View
     */
    public function handleSeo()
    {
        return view('frontend.seo')->with(['title' => 'SEO']);
    }

    /**
     * @return Factory|View
     */
    public function handleAdditionalServices()
    {
        return view('frontend.additional-services')->with(['title' => 'Additional Services']);
    }

    /**
     * @return Factory|View
     */
    public function handleEmailHosting()
    {
        return view('frontend.email-hosting')->with(['title' => 'Email Hosting']);
    }

    /**
     * @return Factory|View
     */
    public function handleDnsHosting()
    {
        return view('frontend.dns-hosting')->with(['title' => 'DNS Hosting and Management']);
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function index($page = 'index')
    {
        $methodName = 'handle' . studly_case($page);

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
            'projects' => Project::visible()->orderBy('id', 'DESC')->get(),
            'blogs' => Blog::published()->latest('published_at')->take(4)->get(),
        ]));
    }

    /**
     * @return WebsiteController
     */
    public function handleAbout()
    {
        return $this->renderView('about', 'About Us');
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
        return view('frontend.social-media')->with(['title' => 'Social Media']);
    }

    /**
     * @return WebsiteController
     */
    public function handleServices()
    {
        return $this->renderView('services', 'Services');
    }

    /**
     * @return WebsiteController
     */
    public function handleWork()
    {
        return $this->renderView('projects', 'Our Work');
    }

    /**
     * @return WebsiteController
     */
    public function handleContact()
    {
        return view('frontend.contact')->with(['title' => 'Contact Us']);
    }

    /**
     * @return WebsiteController
     */
    public function handleQuote()
    {
        return $this->renderView('longform', 'Quote');
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
    public function services()
    {
        return $this->renderView('services-alt', 'Services');
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

    private function getProjects()
    {
        return Blog::published()->whereHas('category', function ($query) {
            $query->project();
        })->get();
    }
}
