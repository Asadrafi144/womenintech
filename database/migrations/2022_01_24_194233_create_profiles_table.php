<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignID('profileid');
            $table->timestamps();
            $table->string('occupation');
            $table->string('profilepic');
            $table->string('email');
            $table->string('name');
            $table->string('job');
            $table->string('motivation');
            $table->string('education');
            $table->string('experience');
            $table->string('motivatetwo');
            $table->string('future');
            $table->string('advice');
            $table->foreign('profileid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
