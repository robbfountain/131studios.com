<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Exception;
use InvoiceNinja\Config as NinjaConfig;
use InvoiceNinja\Models\Client;
use Prologue\Alerts\Facades\Alert;

class ClientController extends Controller
{
    protected $clients;

    /**
     * ClientController constructor.
     */
    public function __construct()
    {
        NinjaConfig::setURL('https://client.131studios.com/api/v1');
        NinjaConfig::setToken(env('NINJA_TOKEN'));
        $this->clients = collect(Client::all());
    }

    /**
     * @return $this
     */
    public function index()
    {
        return view('admin.clients')->with(['clients' => $this->filterByActiveAndNew()]);
    }

    /**
     * @return static
     */
    protected function filterByActiveAndNew()
    {
        return $this->clients->filter(function ($item, $key) {
            return ! $item->is_deleted /*&& $this->isNew($item)*/;
        });
    }

    /**
     * @param $item
     * @return bool
     */
    public function isNew($item)
    {
        return ! User::where('email', $item->contacts[0]->email)->exists();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($id)
    {
        try {
            $client = Client::find($id);
            if ($this->isNew($client)) {
               $user = User::create([
                    'name' => $client->contacts[0]->first_name.' '.$client->contacts[0]->last_name,
                    'email' => $client->contacts[0]->email,
                    'password' => bcrypt(str_random(8)),
                    'account_key' => $client->account_key,
                    'account_id' => $client->id,
                ]);

                Alert::success('<h4><i class="fa fa-check"></i> Client Account Created</h4>Accont for '.$client->contacts[0]->first_name.' '.$client->contacts[0]->last_name.' created')->flash();
            } else {
                Alert::error('<h4><i class="fa fa-times"></i> Account not created</h4> A user with that account already exists')->flash();
            }
        } catch (Exception $e) {
            Alert::error('Client not found')->flash();
        }

        return redirect()->route('client.show');
    }
}
