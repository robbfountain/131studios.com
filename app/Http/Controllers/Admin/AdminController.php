<?php

namespace App\Http\Controllers\Admin;

use Backpack\Base\app\Http\Controllers\AdminController as BackpackAdminController;

class AdminController extends BackpackAdminController {
	
	public function __construct() 
	{
		$this->middleware('acp');
	} // __construct
}