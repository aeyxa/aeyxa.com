<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserToCardTable extends Migration
{
    public function up()
    {
        Schema::table('card', function(Blueprint $table)
		{
            $table->string('user');
        });
    }

    public function down()
    {
        Schema::table('card', function(Blueprint $table)
        {
            $table->dropColumn('user');
        });
    }
}
