<?php

namespace App\Http\Controllers;

/**
 * Class HostingController.
 */
class HostingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.hosting')->with([
            'title' => 'Web Hosting In Greencastle, Chambersburg & Hagerstown  | 131 Studios',
        ]);
    }
}
