<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Requests\ContactRequest as StoreRequest;
use App\Http\Requests\ContactRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ContactCrudController extends CrudController
{

    public function setUp()
    {
        $this->crud->setModel("App\Contact");
        $this->crud->setRoute("admin/contact");
        $this->crud->setEntityNameStrings('contact', 'contacts');

        $this->crud->setFromDb();

        $this->crud->allowAccess('details_row');
        $this->crud->denyAccess(['create','update']);

        $this->crud->removeColumns(['clones','likes','dont_like','servers','server_os','workstations','ownership','redesign','components','host','project_description']);

        // ------ CRUD DETAILS ROW
        $this->crud->enableDetailsRow();

        $this->crud->enableAjaxTable();
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
        $contact = Contact::findOrFail($id);
        return view('admin.details_row')->with(['contact' => $contact])->render();
    }
}
