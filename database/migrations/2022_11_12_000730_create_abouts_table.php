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
            $table->longText('Description')->nullable();
            $table->string('Photo')->nullable();
            $table->date('Birthday')->nullable();
            $table->string('Degree')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('City')->nullable();
            $table->string('Website')->nullable();
            $table->boolean('Freelance')->nullable();
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
