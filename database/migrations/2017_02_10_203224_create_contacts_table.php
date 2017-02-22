<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('contact_method');
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->string('project_type');
            $table->string('project_timeframe');
            $table->string('project_budget')->nullable();
            $table->text('project_description');
            $table->text('clones')->nullable();
            $table->text('likes')->nullable();
            $table->text('dont_like')->nullable();
            $table->string('redesign')->nullable();
            $table->string('components')->nullable();
            $table->string('host')->nullable();
            $table->string('servers')->nullable();
            $table->string('server_os')->nullable();
            $table->string('workstations')->nullable();
            $table->string('ownership')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
