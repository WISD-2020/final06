<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCommentatorsField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commentators', function (Blueprint $table) {//刪除欄位
            $table->dropColumn('week1');
            $table->dropColumn('period1');
            $table->dropColumn('week2');
            $table->dropColumn('period2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentators', function (Blueprint $table) {
            $table->string('week1');
            $table->string('period1');
            $table->string('week2');
            $table->string('period2');
        });
    }
}
