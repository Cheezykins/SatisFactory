<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCredentialTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credential_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('display_name');
            $table->boolean('default')->default(false);
            $table->timestamps();
        });

        \App\CredentialType::create([
            'type' => 'SSH_KEY',
            'display_name' => 'SSH Key'
        ]);

        \App\CredentialType::create([
            'type' => 'BASIC_AUTH',
            'display_name' => 'Basic Auth'
        ]);

        \App\CredentialType::create([
            'type' => 'API_TOKEN',
            'display_name' => 'API Token'
        ]);

        \App\CredentialType::create([
            'type' => 'NONE',
            'display_name' => 'None',
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
        Schema::drop('credential_types');
    }
}
