<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('sub_title');
            $table->string('slug')->default('');
            $table->text('description');
            $table->string('primary_image');
            $table->boolean('hidden')->default(0);
            $table->json('alternate_images')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();
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
        Schema::drop('projects');
    }
}
