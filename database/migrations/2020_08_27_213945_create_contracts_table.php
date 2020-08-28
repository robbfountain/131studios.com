<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('designer')->default('131 Studios');
            $table->longText('scope');
            $table->date('starts_at')->nullable();
            $table->date('approval_milestone')->nullable();
            $table->date('ends_at');
            $table->integer('revisions')->default(1);
            $table->decimal('revision_cost')->nullable();
            $table->decimal('total_cost');
            $table->decimal('deposit')->nullable()->default(0);
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
        Schema::dropIfExists('contracts');
    }
}
