<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorLog extends Migration
{

    public function up()
    {
        Schema::create('Creator_Log', function (Blueprint $table) {
            $table->increments('id');

$table->dateTime('created_at');

$table->dateTime('updated_at');

$table->dateTime('deleted_at');

$table->string('message','255');

$table->string('type','255');

$table->string('referer','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Log');
    }
}
