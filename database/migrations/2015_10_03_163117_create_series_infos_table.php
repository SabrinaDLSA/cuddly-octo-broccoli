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
            $table->integer('series_id')->unsigned();
            $table->timestamps();

            $table->foreign('series_id')
                  ->references('id')->on('series')
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
