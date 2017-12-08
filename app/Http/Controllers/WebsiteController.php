<?php

namespace App\Http\Controllers;

use App\Models\Project;

class WebsiteController extends Controller {

    /**
     * Constructor
     */
    public function __construct()
    {
        //
    } // __construct

    public function index()
    {
        $projects = Project::where('hidden', 0)->orderBy('lft', 'ASC')->get();

        return view(env('THEME') . '.index', compact('projects', 'pages'));
    } // index

    public function contact()
    {
        //   dd(Req::route()->uri());
        return view(env('THEME') . '.contact')->with(['heading' => 'Contact Us']);
    } // contact

    public function longForm()
    {
        return view(env('THEME') . '.longform')->with(['heading' => 'Contact Us']);
    } // longForm

    public function about()
    {
        return view(env('THEME') . '.about')->with(['heading' => 'About Us']);
    } // about

    public function services()
    {
        return view(env('THEME') . '.services-alt')->with(['heading' => 'Services']);
    } // services

    public function hosting()
    {
        return view(env('THEME') . '.services.hosting')->with(['heading' => 'Hosting']);
    }

}
