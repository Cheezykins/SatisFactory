<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('display_name');
            $table->string('short_display_name');
            $table->string('code');
            $table->index(['code']);
            $table->timestamps();
        });

        Schema::table('builds', function (Blueprint $table) {
            $table->integer('build_status_id')->unsigned();
            $table->foreign('build_status_id')->references('id')->on('build_statuses');
        });

        \App\BuildStatus::create([
            'display_name' => 'Build was stopped or killed externally',
            'short_display_name' => 'Killed',
            'code' => \App\BuildStatus::KILLED
        ]);

        \App\BuildStatus::create([
            'display_name' => 'Build has not started yet',
            'short_display_name' => 'Pending',
            'code' => \App\BuildStatus::PENDING
        ]);

        \App\BuildStatus::create([
            'display_name' => 'Build is in progress',
            'short_display_name' => 'Running',
            'code' => \App\BuildStatus::RUNNING
        ]);

        \App\BuildStatus::create([
            'display_name' => 'Build has errored',
            'short_display_name' => 'Error',
            'code' => \App\BuildStatus::ERROR
        ]);

        \App\BuildStatus::create([
            'display_name' => 'Build finished successfully',
            'short_display_name' => 'Success',
            'code' => \App\BuildStatus::SUCCESS
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('build_statuses');
    }
}
