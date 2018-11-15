<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeHiddenToVisibleInProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->boolean('visible')->default(true);
        });

        foreach (\App\Project::all() as $project) {
            $project->update([
                'visible' => !$project->hidden,
            ]);


        }

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('hidden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
