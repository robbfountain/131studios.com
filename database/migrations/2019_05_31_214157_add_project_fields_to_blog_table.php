<?php

use App\Blog;
use App\Category;
use App\Project;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectFieldsToBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('url')->nullable();
            $table->string('project_title')->nullable();
            $table->text('project_description')->nullable();
        });

        $category = Category::create(['name' => 'Project', 'user_id' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['url','project_title','project_description']);
        });
    }
}
