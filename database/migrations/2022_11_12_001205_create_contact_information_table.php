<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_information', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('Location');
            $table->string('Email');
            $table->string('Phone');
            $table->string('MapLocation');
            $table->string('Facebook');
            $table->string('Instagram');
            $table->string('Twitter');
            $table->string('LinkedIn');
            $table->string('Skype');
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
        Schema::dropIfExists('contact_information');
    }
};
