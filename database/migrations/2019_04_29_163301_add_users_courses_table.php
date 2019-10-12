<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_courses', function( Blueprint $table){
            $table->bigIncrements('id');
            $table->float('rating')->default(0.0);
            $table->unsignedInteger('time_slot');

            $table->integer('user_id')->unsigned();
            $table->integer('course_id')->unsigned();

            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('course_id')->references('id')->on('courses');

            $table->timestamps();
          });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_courses');
    }
}
