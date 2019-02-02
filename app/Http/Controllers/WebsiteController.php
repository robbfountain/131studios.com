<?php

namespace App\Http\Controllers;

use App\Project;

class WebsiteController extends Controller
{

    /**
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

    public function handleIndex()
    {
        return view('frontend.index')->with([
            'projects' => Project::visible()->orderBy('lft', 'ASC')->get(),
        ]);
    }

    /**
     * @return WebsiteController
     */
    public function handleAbout()
    {
        return $this->renderView('about', 'About Us');
    }

    public function handleServices()
    {
        return $this->renderView('services', 'Services');
    }

    public function handleWork()
    {
        return $this->renderView('projects', 'Our Work');
    }

    public function handleContact()
    {
        return $this->renderView('Contact', 'Contact Us');
    }

    public function handleQuote()
    {
        return $this->renderView('longform', 'Quote');
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
     * @param $view
     * @param $heading
     *
     * @return $this
     */
    private function renderView($view, $heading)
    {
        return view('frontend.' . $view)->with(['heading' => $heading]);
    }

}
