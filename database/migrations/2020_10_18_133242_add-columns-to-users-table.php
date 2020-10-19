<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('last_name')->index();
            $table->string('father_name');
            $table->string('m_or_f');
            $table->integer('national_code')->unsigned()->index()->unique();
            $table->integer('phone')->unsigned();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('last_name');
            $table->dropColumn('father_name');
            $table->dropColumn('m_or_f');
            $table->dropColumn('national_code');
            $table->dropColumn('phone');
        });
    }
}
