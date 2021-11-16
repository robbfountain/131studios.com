<?php

namespace App\Http\Controllers;

use App\Assessment;

/**
 * Class SeoController.
 */
class SeoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('frontend.seo')->with([
            'title' => 'Search Engine Optimization - SEO | 131 Studios',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function assessment($uuid = null)
    {
        return view('frontend.seo.seo-assessment')->with([
            'client' => $this->getClient($uuid),
        ]);
    }

    private function getClient($uuid)
    {
        return Assessment::findByUuid($uuid);
    }
}
