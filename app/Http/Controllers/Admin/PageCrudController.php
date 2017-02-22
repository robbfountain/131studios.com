<?php namespace App\Http\Controllers\Admin;

use Backpack\PageManager\app\Http\Controllers\Admin\PageCrudController as BackpackPageCrudController;

class PageCrudController extends BackpackPageCrudController {

	public function __construct() 
	{
		$this->middleware('Administrator');

		parent::__construct();
	} // __construct
}