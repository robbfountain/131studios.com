<?php namespace App\Http\Controllers\Admin;

use Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController as BackpackPermissionCrudController;

class PermissionCrudController extends BackpackPermissionCrudController {

	public function __construct() 
	{
		$this->middleware('Administrator');

		parent::__construct();
	} // __construct
}