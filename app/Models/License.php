<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class License extends Model
{
    protected $guarded = ['id'];

    use CrudTrait;

     public function product()
     {
         return $this->belongsTo(Product::class);
     }

     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function activate()
     {
         return $this->update(['activated_at' => Carbon::now()]);
     }

     public function verify()
     {
         return $this->update(['verified_at' => Carbon::now()]);
     }

     public function activateAndVerify()
     {
         $this->activate();
         $this->verify();
     }
}
