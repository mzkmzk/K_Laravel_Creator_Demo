<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorLoadtime extends Migration
{

    public function up()
    {
        Schema::create('Creator_Loadtime', function (Blueprint $table) {
            $table->increments('id');

$table->dateTime('created_at');

$table->dateTime('updated_at');

$table->dateTime('deleted_at');

$table->string('unload_event_start','255');

$table->string('dom_content_loaded','255');

$table->string('atf','255');

$table->string('window_loaded','255');

$table->string('origin','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Loadtime');
    }
}
