<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifySpatiePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        $columnNames = config('permission.column_names');

        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->string('guard_name')->nullable();
        });

        Schema::table($tableNames['roles'], function (Blueprint $table) {
            $table->string('guard_name')->nullable();
        });

        Schema::table($tableNames['model_has_permissions'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->string('model_type')->nullable();
        });

        Schema::table($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->string('model_type')->nullable();

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
