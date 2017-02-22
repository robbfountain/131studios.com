<?php namespace App\Http\Controllers\Admin;

use Backpack\PermissionManager\app\Http\Controllers\RoleCrudController as BackpackRoleCrudController;


class RoleCrudController extends BackpackRoleCrudController {

	public function __construct() 
	{
		$this->middleware('Administrator');

		parent::__construct();
	} // __construct
}