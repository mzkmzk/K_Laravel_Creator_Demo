<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorError extends Migration
{

    public function up()
    {
        Schema::table('Creator_Error', function (Blueprint $table) {
            
        });
    }

    public function down()
    {
        Schema::drop('Creator_Error');
    }
}
