<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function index()
    {
        return view('frontend.hosting')->with([
            'title' => 'Web Hosting In Greencastle, Chambersburg & Hagerstown  | 131 Studios'
        ]);
    }
}
