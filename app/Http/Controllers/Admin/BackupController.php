<?php namespace App\Http\Controllers\Admin;

use Backpack\BackupManager\app\Http\Controllers\BackupController as BackpackBackupController;

class BackupController extends BackpackBackupController {

	public function __construct() 
	{
		$this->middleware('Administrator');
		
	} // __construct
}