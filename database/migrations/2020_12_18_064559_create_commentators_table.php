<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentators', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->integer('way_id');
            $table->char('week1');//一個解說員一周負責兩天
            $table->string('period1');
            $table->char('week2');
            $table->string('period2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentators');
    }
}
