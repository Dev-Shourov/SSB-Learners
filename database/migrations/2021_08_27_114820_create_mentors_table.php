<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('designation');
            $table->string('slug');
            $table->longText('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('fiverr_url')->nullable();
            $table->string('upwork_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->text('fiverr_img')->nullable();
            $table->text('upwork_img')->nullable();
            $table->text('profile_img')->nullable();
            $table->integer('status')->comment('1 = Inactive, 2 = Active')->nullable();
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
        Schema::dropIfExists('mentors');
    }
}
