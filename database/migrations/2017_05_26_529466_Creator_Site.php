<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorSite extends Migration
{

    public function up()
    {
        Schema::table('Creator_Site', function (Blueprint $table) {
            
        });
    }

    public function down()
    {
        Schema::drop('Creator_Site');
    }
}
