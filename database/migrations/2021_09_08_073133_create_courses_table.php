<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('eng_title');
            $table->string('slug');
            $table->string('into_video')->nullable();
            $table->integer('price');
            $table->string('graduate_num');
            $table->integer('class_hour');
            $table->integer('total_lecture');
            $table->string('course_duration');
            $table->text('motivational_content')->nullable();
            $table->text('course_opportunity')->nullable();
            $table->text('course_requirements')->nullable();
            $table->text('curriculumn_desc')->nullable();
            $table->integer('coupon_status')->default(1)->comment('1 = accept, 2 = not-accepted');
            $table->integer('course_status')->default(1)->comment('1 = inactive, 2 = active');
            $table->text('course_img')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
