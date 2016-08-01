<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build_repositories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('build_id')->unsigned();
            $table->foreign('build_id')->references('id')->on('builds');
            $table->integer('repository_id')->unsigned();
            $table->foreign('repository_id')->references('id')->on('repositories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('build_repositories');
    }
}
