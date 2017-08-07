<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorLoadtime extends Migration
{

    public function up()
    {
        Schema::table('Creator_Loadtime', function (Blueprint $table) {
            $table->string('referer','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Loadtime');
    }
}
