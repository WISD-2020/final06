<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {//管理員給出預約結果，會員查看
            $table->increments('id');
            $table->date('date');//預約日期
            $table->string('period');//預約時段
            $table->string('result');//預約結果：成功/失敗
            $table->integer('people_id');
            $table->integer('visit_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
