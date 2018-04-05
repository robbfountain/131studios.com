<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use InvoiceNinja\Config as NinjaConfig;
use InvoiceNinja\Models\Client;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        NinjaConfig::setURL('https://client.131studios.com/api/v1');
        NinjaConfig::setToken(env('NINJA_TOKEN'));
    }
    
    public function index()
    {
        return view('account.index')->with(['client' => Client::find(auth()->user()->account_id)]);
    }
}
