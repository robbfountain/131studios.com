<?php

namespace App\Http\Controllers;

use App\Models\Project;

class WebsiteController extends Controller
{

    /**
     * @return $this
     */
    public function index()
    {
        return view('frontend.index')->with([
            'projects' => Project::visible()->orderBy('lft', 'ASC')->get()
        ]);
    }

    /**
     * @return WebsiteController
     */
    public function about()
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

}
