<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contents_name');
            $table->text('contents_alias');
            $table->integer('contents_order');
            $table->text('contents_descript');
            $table->integer('Created_by')->unsigned();
            $table->integer('Modifyed_by')->unsigned();
            $table->timestamps();

            $table->foreign('Created_by')->references('id')->on('users');
            $table->foreign('Modifyed_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }
}
