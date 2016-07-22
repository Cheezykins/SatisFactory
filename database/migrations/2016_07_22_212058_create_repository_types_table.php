<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositoryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('display_name');
            $table->boolean('default')->default(false);
            $table->timestamps();
        });

        \App\RepositoryType::create([
            'type' => 'VCS',
            'display_name' => 'VCS',
            'default' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('repository_types');
    }
}
