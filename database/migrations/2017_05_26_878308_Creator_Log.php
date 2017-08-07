<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorLog extends Migration
{

    public function up()
    {
        Schema::table('Creator_Log', function (Blueprint $table) {
            $table->string('identifying','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Log');
    }
}
