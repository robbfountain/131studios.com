<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AdditionalServicesController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('frontend.additional-services')->with([
            'title' => 'Additional Services | 131 Studios',
        ]);
    }
}
