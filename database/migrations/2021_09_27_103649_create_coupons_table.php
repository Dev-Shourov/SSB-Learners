<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->integer('discount_type')->comment('1 = Fixed, 2 = Percentage');
            $table->integer('course_type')->comment('1 = online, 2 = offline');
            $table->integer('fixed_value')->nullable();
            $table->integer('percentage_value')->nullable();
            $table->integer('status')->default(1)->comment('1 = inactive, 2 = active');
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
        Schema::dropIfExists('coupons');
    }
}
