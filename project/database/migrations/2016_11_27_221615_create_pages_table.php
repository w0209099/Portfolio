<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Pages_name');
            $table->text('Pages_alias');
            $table->text('Pages_descript');
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
        Schema::drop('pages');
    }
}
