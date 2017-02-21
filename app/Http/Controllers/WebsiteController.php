<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortContactForm;
use App\Mail\ContactFormSubmitted;
use App\Models\MenuItem as Menu;
use App\Models\Page;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request as Req;
use Illuminate\Support\Facades\Route;
use Newsletter;

class WebsiteController extends Controller
{
	/**
	 * Constructor
	 */
    public function __construct() 
    {
    	//
    } // __construct

    public function index() 
    {
        $projects = Project::where('hidden',0)->orderBy('lft', 'ASC')->get();
        $pages = Page::find(3)->withFakes();
    	return view(env('THEME').'.index', compact('projects', 'pages'));
    } // index

    public function contact() 
    {
     //   dd(Req::route()->uri());
        return view(env('THEME').'.contact')->with(['heading' => 'Contact Us']);
    } // contact

    public function about() 
    {
        return view(env('THEME').'.about')->with(['heading' => 'About Us']);
    } // about

    public function services() 
    {
        return view(env('THEME').'.services')->with(['heading' => 'Services']);
    } // services

    public function sendMessage(ShortContactForm $request) 
    {
        if($request->newsletter == "true")
        {
           if(! Newsletter::subscribe($request->email))
            {
                return [
                    'success' => true,
                    'message'   =>  Newsletter::getLastError(),
                    'title' =>  'Oops, something went wrong',
                    'type'  =>  'error',
                ];
            }

        }

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactFormSubmitted($request));

        return [
            'success'   =>  true,
            'message'   =>  'Your message has ben sent',
            'title'     =>  'Thank You',
            'type'  =>  'success',
        ];
    } // sendMessage
}
