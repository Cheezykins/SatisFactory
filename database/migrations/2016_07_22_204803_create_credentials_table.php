<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('credential_type_id')->unsigned();
            $table->foreign('credential_type_id')->references('id')->on('credential_types');
            $table->integer('credential_domain_id')->unsigned();
            $table->foreign('credential_domain_id')->references('id')->on('credential_domains');
            $table->string('username')->nullable();
            $table->text('credential');
            $table->string('display_name');
            $table->timestamps();
        });

        $cred = new \App\Credential();
        $cred->credential = '';
        $cred->display_name = 'None';
        $cred->credential_domain()->associate(\App\CredentialDomain::getDefault());
        $cred->credential_type()->associate(\App\CredentialType::getDefault());
        $cred->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('credentials');
    }
}
