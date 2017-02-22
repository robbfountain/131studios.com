<?php namespace App\Http\Controllers\Admin;

use Backpack\LogManager\app\Http\Controllers\LogController as BackpackLogController;

class LogController extends BackpackLogController {

	public function __construct() 
	{
		$this->middleware('Administrator');

		
	} // __construct
}