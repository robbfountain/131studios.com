<?php
namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	use CrudTrait;

	protected $fakeColumns = ['extras'];

	protected $fillable = ['extras'];
}