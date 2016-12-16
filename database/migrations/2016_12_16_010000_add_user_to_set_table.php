<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserToSetTable extends Migration
{
    public function up()
    {
        Schema::table('set', function(Blueprint $table)
		{
            $table->string('user');
        });
    }

    public function down()
    {
        Schema::table('set', function(Blueprint $table)
        {
            $table->dropColumn('user');
        });
    }
}
