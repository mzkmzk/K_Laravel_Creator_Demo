<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorSite extends Migration
{

    public function up()
    {
        Schema::create('Creator_Site', function (Blueprint $table) {
            $table->increments('id');

$table->dateTime('created_at');

$table->dateTime('updated_at');

$table->dateTime('deleted_at');

$table->unsignedInteger('creator_user_id');

$table->string('host','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Site');
    }
}
