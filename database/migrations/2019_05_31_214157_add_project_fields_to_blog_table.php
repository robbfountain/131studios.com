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

        $category = Category::create(['name' => 'Project']);

//        Project::all()->each(function ($p) use ($category) {
//            Blog::create([
//                'user_id' => 1,
//                'category_id' => $category->id,
//                'title' => $p->title,
//                'body' => $p->description,
//                'url' => $p->url,
//                'published_at' => now(),
//                'is_published' => $p->visible,
//                'is_featured' => false,
//                'image' => $p->primary_image
//            ]);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->dropColumn('project_title');
            $table->dropColumn('project_description');
        });
    }
}
