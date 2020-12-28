<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteCommentatorsAndModifyCommentatorField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits', function (Blueprint $table) {//刪除欄位
            $table->dropColumn('commentator_id');
        });
        Schema::drop('commentators');
        Schema::table('ways', function ($table) {
            $table->string('commentator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function (Blueprint $table) {//刪除欄位
            $table->string('commentator_id');
        });
        Schema::create('commentators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname');
            $table->integer('way_id');
        });
        Schema::table('ways', function (Blueprint $table) {//刪除欄位
            $table->dropColumn('commentator');
        });
    }
}
