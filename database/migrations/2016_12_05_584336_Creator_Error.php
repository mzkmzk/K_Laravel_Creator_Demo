<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorError extends Migration
{

    public function up()
    {
        Schema::create('Creator_Error', function (Blueprint $table) {
            $table->increments('id');

$table->dateTime('created_at');

$table->dateTime('updated_at');

$table->dateTime('deleted_at');

$table->string('_id','255');

$table->string('class_name','255');

$table->string('url','255');

$table->string('origin','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Error');
    }
}
