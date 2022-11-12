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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->text('AboutMe')->nullable();
            $table->string('Title')->nullable();
            $table->longText('Description');
            $table->string('Photo');
            $table->date('Birthday');
            $table->string('Degree');
            $table->string('Phone');
            $table->string('Email');
            $table->string('City');
            $table->string('Website');
            $table->boolean('Freelance');
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
        Schema::dropIfExists('abouts');
    }
};
