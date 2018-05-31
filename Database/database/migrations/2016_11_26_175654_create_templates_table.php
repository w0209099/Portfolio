<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Template_name');
            $table->text('Template_descript');
            $table->boolean('Template_active');
            $table->text('Template_content');
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
        Schema::drop('templates');
    }
}
