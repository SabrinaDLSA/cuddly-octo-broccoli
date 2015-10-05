<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genre');
            $table->text('description');
            $table->date('start');
            $table->date('finish');
            $table->integer('info_id')->unsigned();
            $table->timestamps();

            $table->foreign('info_id')
                  ->references('id')->on('series_info')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('series_infos');
    }
}
