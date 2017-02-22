<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\NewsCRUD\app\Http\Requests\TagRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\TagRequest as UpdateRequest;
use Illuminate\Support\Facades\Auth;

class TagCrudController extends CrudController
{
    public function setup()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Tag");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/tag');
        $this->crud->setEntityNameStrings('tag', 'tags');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'name',
                                'label' => 'Name',
                            ]);
        $this->crud->addColumn([
                                'name' => 'slug',
                                'label' => 'Slug',
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'name',
                                'label' => 'Name',
                            ]);
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'hint' => 'Will be automatically generated from your name, if left empty.',
                                // 'disabled' => 'disabled'
                            ]);

        // Permissions
        if(Auth::user()->hasRole('Author') && ! Auth::user()->hasRole('Administrator'))
        {
            $this->crud->addClause('where', 'user_id', '=', Auth::user()->id);
        }

        if(!Auth::user()->hasAnyRole(['Administrator', 'Author', 'Editor']))
        {
            $this->crud->denyAccess(['list','create','delete','update']);
        }
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
