<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $upField = function ($table) {
            $table->string('cover_image');
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
        $upField = function ($table) {
            $table->dropColumn('cover_image');
        };

        Schema::table('posts', $upField);
    }
}
