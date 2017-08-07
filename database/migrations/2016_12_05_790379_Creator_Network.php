<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorNetwork extends Migration
{

    public function up()
    {
        Schema::create('Creator_Network', function (Blueprint $table) {
            $table->increments('id');

$table->dateTime('created_at');

$table->dateTime('updated_at');

$table->dateTime('deleted_at');

$table->string('duration','255');

$table->integer('url');

$table->string('origin','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Network');
    }
}
