<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorNetwork extends Migration
{

    public function up()
    {
        Schema::table('Creator_Network', function (Blueprint $table) {
            $table->string('referer','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Network');
    }
}
