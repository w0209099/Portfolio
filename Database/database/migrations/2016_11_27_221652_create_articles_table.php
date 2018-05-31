<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Articles_name');
            $table->text('Articles_title');
            $table->integer('Articles_page')->unsigned();
            $table->text('Articles_descript');
            $table->text('Articles_content');
            $table->text('Articles_html');
            $table->integer('Articles_CA_ID')->unsigned();
            $table->text('Articles_all_pages');
            $table->integer('Created_by')->unsigned();
            $table->integer('Modifyed_by')->unsigned();
            $table->timestamps();

            $table->foreign('Created_by')->references('id')->on('users');
            $table->foreign('Modifyed_by')->references('id')->on('users');
            $table->foreign('Articles_page')->references('id')->on('pages');
            $table->foreign('Articles_CA_ID')->references('id')->on('contents');




        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
