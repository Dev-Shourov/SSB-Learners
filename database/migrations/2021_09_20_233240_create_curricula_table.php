<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->string('curriculum_name')->unique();
            $table->string('one_en')->nullable();
            $table->string('one_desc')->nullable();
            $table->string('two_en')->nullable();
            $table->string('two_desc')->nullable();
            $table->string('three_en')->nullable();
            $table->string('three_desc')->nullable();
            $table->string('four_en')->nullable();
            $table->string('four_desc')->nullable();
            $table->string('five_en')->nullable();
            $table->string('five_desc')->nullable();
            $table->integer('curriculum_status')->default(1)->comment('1 = inactive, 2 = active');
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
        Schema::dropIfExists('curricula');
    }
}
