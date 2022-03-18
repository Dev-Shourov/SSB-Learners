<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name')->unique();
            $table->string('slug');
            $table->string('starting_date')->nullable();
            $table->string('class_day')->nullable();
            $table->string('class_timing')->nullable();
            $table->string('fb_group')->nullable();
            $table->string('sit_number')->default(25);
            $table->integer('branch_id')->default(0);
            $table->integer('course_id');
            $table->integer('curriculum_id');
            $table->integer('mentor_id');
            $table->integer('batch_type')->default(1)->comment('1 = online, 2 = offline');
            $table->integer('admission_status')->default(1)->comment('1 = inactive, 2 = active');
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
        Schema::dropIfExists('batches');
    }
}
