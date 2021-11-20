<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class RemoveUnusedTablesAndData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('contracts');
        Schema::dropIfExists('checks');
        Schema::dropIfExists('taggables');
        Schema::dropIfExists('tagged');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('assessments');
        Schema::dropIfExists('article_tag');
        Schema::dropIfExists('video_views');
        Schema::dropIfExists('videos');
        Schema::dropIfExists('web_mentions');
        Schema::dropIfExists('webhook_calls');
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
