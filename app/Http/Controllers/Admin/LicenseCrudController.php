<?php

namespace App\Http\Controllers\Admin;

use App\Classes\LicenseRepository;
use App\Http\Requests\LicenseRequest as StoreRequest;
use App\Http\Requests\LicenseRequest as UpdateRequest;
use App\Mail\LicenseKeyGenerated;
use App\Models\License;
use App\Models\Product;
use App\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use function wordwrap;

// VALIDATION: change the requests to match your own file names if you need form validation

class LicenseCrudController extends CrudController {
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\License');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/license');
        $this->crud->setEntityNameStrings('license', 'licenses');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->addField([
            'name'      => 'product_id',
            'label'     => 'Product',
            'type'      => 'select2',
            'entity'    => 'product',
            'attribute' => 'name',
            'model'     => 'App\Models\Product',
        ]);

        $this->crud->addField([
            'name'      => 'user_id',
            'label'     => 'User',
            'type'      => 'select2',
            'entity'    => 'user',
            'attribute' => 'name',
            'model'     => 'App\User',
        ]);


        $this->crud->addField([
            'name'  => 'expires_at',
            'label' => 'Expiration Date',
            'type'  => 'date',
        ],
            'update');

        $this->crud->addColumn([
            'name'      => 'user_id',
            'type'      => 'select',
            'label'     => 'User',
            'entity'    => 'user',
            'attribute' => 'name',
            'model'     => 'App\User',
        ]);

        $this->crud->addColumn([
            'name'      => 'product_id',
            'type'      => 'select',
            'label'     => 'Product',
            'entity'    => 'product',
            'attribute' => 'name',
            'model'     => 'App\Models\Product',
        ]);

        $this->crud->addColumn([
            'name'  => 'verified_at',
            'label' => 'Last Checked',
        ]);

        $this->crud->addColumn([
            'name'  => 'expires_at',
            'label' => 'Expires',
        ]);

        $this->crud->addColumn([
            'name'  => 'license_key',
            'label' => 'License Key',
            'type'  => 'license',
        ]);

        $this->crud->enableDetailsRow();


        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $product = Product::findOrFail($request->product_id);

        $licenseKey = (new LicenseRepository($user, $product))->generateLicense();

        $request->request->set('license_key', $licenseKey);
        $request->request->set('expires_at', Carbon::now()->addDays($product->support_term + 1));
        $redirect_location = parent::storeCrud($request);
        Mail::to($user)->send(new LicenseKeyGenerated($this->crud->entry));

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

    public function showDetailsRow($id)
    {
        $license = License::findOrFail($id);

        return "<div class='col-md-12'>
                    <textarea cols='150' rows='15' class='form-control'>
                        " . wordwrap($license->license_key, 100, "\n", true) .
            "</textarea>
                </div>";
    }
}
