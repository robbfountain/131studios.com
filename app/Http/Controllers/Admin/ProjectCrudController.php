<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest as StoreRequest;
use App\Http\Requests\ProjectRequest as UpdateRequest;
use App\Models\Project;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Auth;

class ProjectCrudController extends CrudController
{

    public function setup()
    {
        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Project");
        $this->crud->setRoute("admin/project");
        $this->crud->setEntityNameStrings('project', 'projects');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->addField([ 
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text'
            
        ]);

        $this->crud->addField([
            'name' => 'category_id',
            'label' => 'Category',
            'type' => 'select2',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => 'App\Models\Category',
        ]);

        $this->crud->addField([ 
            'name' => 'slug',
            'label' => 'Slug',
            'type' => 'text',
            'description' => 'If blank, one will be created automatically',
        ], 'both');


        $this->crud->addField([
            'name' => 'url',
            'label' => 'Website URL',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'ckeditor',
            
        ]);

        $this->crud->addField([ 
            'name' => 'primary_image',
            'label' => 'Primary Image',
            'type' => 'browse',
            
        ]);


        $this->crud->addField([ 
            'name' => 'hidden',
            'label' => 'Hidden',
            'type' => 'checkbox',
                      
        ]);

        $this->crud->addColumn([
            'name'    => 'title',
            'label' => 'Title',
            'type'    => 'text',
        ]);

        $this->crud->addColumn([
            'name'    => 'hidden',
            'label' => 'Hidden',
            'type'    => 'check',
        ]);

        $this->crud->addColumn([
            'name'    => 'slug',
            'label' => 'Slug',
            'type'    => 'text',
            
        ]);

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

        // ------ CRUD ACCESS
         $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete', 'details_row']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
         $this->crud->enableReorder('title', 1);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
         $this->crud->enableDetailsRow();
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
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

	public function store(StoreRequest $request)
	{

		// your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}

    public function showDetailsRow($id) 
    {
        $project = Project::findOrFail($id);
        return $project->description;
    } // showDetailsRow

}
