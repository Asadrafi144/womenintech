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
            $table->text('job');
            $table->text('motivation');
            $table->text('education');
            $table->text('experience');
            $table->text('motivatetwo');
            $table->text('future');
            $table->text('advice');
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
