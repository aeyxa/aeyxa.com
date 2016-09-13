<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regex', function (Blueprint $table) {
            $table->increments('id');
			$table->longtext('Sentence');
			$table->longtext('Match');
			$table->longtext('Regex');
			$table->integer('Priority');
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
        Schema::drop('regex');
    }
}
