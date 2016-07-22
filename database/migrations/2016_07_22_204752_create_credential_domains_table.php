<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCredentialDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credential_domains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain');
            $table->string('display_name');
            $table->boolean('default')->default(false);
            $table->timestamps();
        });

        \App\CredentialDomain::create([
            'domain' => '*',
            'display_name' => 'Global (*)',
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
        Schema::drop('credential_domains');
    }
}
