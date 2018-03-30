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
        $this->crud->setModel("App\Models\Project");
        $this->crud->setRoute("admin/project");
        $this->crud->setEntityNameStrings('project', 'projects');

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

         $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete', 'details_row']);

         $this->crud->enableReorder('title', 1);

         $this->crud->enableDetailsRow();
    }

	public function store(StoreRequest $request)
	{
        $redirect_location = parent::storeCrud();

        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{
        $redirect_location = parent::updateCrud();

        return $redirect_location;
	}

    public function showDetailsRow($id) 
    {
        $project = Project::findOrFail($id);
        return $project->description;
    }

}
