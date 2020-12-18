<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuseumHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('museum_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');//美術館某事蹟的開始日期
            $table->date('end_date')->default(NULL);//美術館某事蹟的結束日期，如果與開始日期為同一天則顯示NULL
            $table->string('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('museum_histories');
    }
}
