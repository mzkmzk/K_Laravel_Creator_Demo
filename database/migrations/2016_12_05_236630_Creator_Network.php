<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorNetwork extends Migration
{

    public function up()
    {
        Schema::table('Creator_Network', function (Blueprint $table) {
            
        });
    }

    public function down()
    {
        Schema::drop('Creator_Network');
    }
}
