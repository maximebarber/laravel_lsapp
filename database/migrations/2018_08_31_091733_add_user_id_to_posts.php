<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $upField = function ($table) 
        {
            $table->integer('user_id');
        };

        Schema::table('posts', $upField);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $downField = function ($table) {
            $table->dropColumn('user_id');
        };

        Schema::table('posts', $addField);
    }
}
