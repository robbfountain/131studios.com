<?php namespace App\Http\Controller\Admin;

use Backpack\Settings\app\Http\Controllers\SettingCrudController as BackpackSettingCrudController;

class SettingCrudController extends BackpackSettingCrudController {

	public function __construct() 
	{
		$this->middleware('Administrator');

		parent::__construct();
	} // __construct
}