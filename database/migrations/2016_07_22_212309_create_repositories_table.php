<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namespace');
            $table->string('name');
            $table->string('url');
            $table->boolean('active');
            $table->integer('installation_count')->unsigned()->default(0); // Denormalise for performance
            $table->integer('repository_type_id')->unsigned();
            $table->foreign('repository_type_id')->references('id')->on('repository_types');
            $table->integer('credential_id')->unsigned();
            $table->foreign('credential_id')->references('id')->on('credentials');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('repositories');
    }
}
