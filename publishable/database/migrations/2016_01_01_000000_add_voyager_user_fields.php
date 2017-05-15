<?php

use Illuminate\Database\Migrations\Migration;
use TCG\Voyager\Facades\Voyager;

class AddVoyagerUserFields extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $table_name = Voyager::model('User')->getTable();
        Schema::table($table_name, function ($table) {
            $table->string('avatar')->nullable()->after('email');
            $table->integer('role_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        $table_name = Voyager::model('User')->getTable();
        Schema::table($table_name, function ($table) {
            $table->dropColumn('avatar');
            $table->dropColumn('role_id');
        });
    }
}
