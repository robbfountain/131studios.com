<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ClientRequest as StoreRequest;
use App\Http\Requests\ClientRequest as UpdateRequest;
use Spatie\Permission\Models\Role;
use function str_random;

class ClientCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/client');
        $this->crud->setEntityNameStrings('client', 'clients');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        $this->crud->removeFields(['password'], 'both');

        $this->crud->addField([
            'name' => 'password',
            'label' => 'password',
            'type' => 'hidden',
            'value' => str_random(15),
        ]);

        $client = Role::where('name', 'client')->first();
        $this->crud->addClause('whereHas', 'roles', function ($query) use ($client) {
            $query->where(config('laravel-permission.table_names.roles') . '.id', $client->id);
        });
    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $this->crud->entry->assignRole('client');

        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
