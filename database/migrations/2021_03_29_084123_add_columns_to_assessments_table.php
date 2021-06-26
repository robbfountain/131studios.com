<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assessments', function (Blueprint $table) {

            $table->uuid('uuid')->nullable()->change();
            $table->string('business_name')->nullable()->change();
            $table->string('first_name')->nullable()->change();
            $table->string('last_name')->nullable()->change();
            $table->string('email')->nullable()->change();

//            $table->string('phone')->nullable();
            $table->longText('success_factors')->nullable();
            $table->longText('important_actions')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('industry')->nullable();
            $table->longText('target_audience')->nullable();
            $table->longText('unfair_advantage')->nullable();
            $table->longText('competitors')->nullable();
            $table->longText('dont_choose_reasons')->nullable();
            $table->longText('penalized')->nullable();
            $table->longText('other_domains')->nullable();
            $table->longText('anything_else')->nullable();

//            $table->dateTime('notified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn([
                'street_address',
                'city',
                'state',
                'zip',
                'about',
                'success_factors',
                'important_actions',
                'keywords',
                'industry',
                'target_audience',
                'unfair_advantage',
                'competitors',
                'dont_choose_reasons',
                'penalized',
                'other_domains',
                'anything_else'
            ]);
        });
    }
}
