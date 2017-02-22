<?php namespace App\Http\Controllers\Admin;

use Backpack\PermissionManager\app\Http\Controllers\UserCrudController as BackpackUserCrudController;

class UserCrudController extends BackpackUserCrudController {

	public function __construct() 
	{
		$this->middleware('Administrator');

		parent::__construct();
	} // __construct
}